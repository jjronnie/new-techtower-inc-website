<?php

namespace App\Http\Controllers\Auth;

use App\Models\UserOtp;
use Illuminate\Http\Request;
use App\Helpers\OtpHelper;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserOtpController extends Controller
{
    public function verify(Request $request)
    {
        $request->validate([
            'otp' => ['required', 'digits:6'],
        ]);

        $userId = session('mfa_user_id');

        if (! $userId) {
            abort(403);
        }

        $otp = UserOtp::where('user_id', $userId)->first();

        if (! $otp || $otp->expired() || $otp->code !== $request->otp) {
            throw ValidationException::withMessages([
                'otp' => 'Invalid or expired verification code.',
            ]);
        }

        $user = $otp->user;

        $otp->delete(); // cleanup immediately
        session()->forget('mfa_user_id');

        Auth::login($user);

        $this->recordLogin($user, $request);

        return redirect()->intended('/');
    }

    protected function recordLogin($user, Request $request): void
    {
        $user->update([
            'last_login_at' => now(),
        ]);
    }


    public function toggle2FA(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'mfa_enabled' => 'required|boolean',
        ]);

        $user->mfa_enabled = $request->mfa_enabled;
        $user->save();

        // Send OTP immediately if enabling 2FA
        if ($user->mfa_enabled) {
            // send_login_otp($user);
            return back()->with('success', '2FA enabled. OTP sent to your email.');
        }

        return back()->with('success', '2FA disabled.');
    }

}