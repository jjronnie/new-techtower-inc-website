<?php
namespace App\Helpers;
use App\Models\User;
use App\Models\UserOtp;

if (! function_exists('send_login_otp')) {

    function send_login_otp(User $user): void
    {
        // Remove old OTPs
        UserOtp::where('user_id', $user->id)->delete();

        $otp = UserOtp::create([
            'user_id' => $user->id,
            'code' => str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT),
            'expires_at' => now()->addMinutes(10),
        ]);

        $user->notify(new \App\Notifications\LoginOtpNotification($otp->code));
    }
}
