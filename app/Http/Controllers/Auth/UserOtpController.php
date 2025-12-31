<?php

namespace App\Http\Controllers\Auth;

use App\Models\UserOtp;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class OtpController extends Controller
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
            'last_login_ip' => $request->ip(),
        ]);
    }
}