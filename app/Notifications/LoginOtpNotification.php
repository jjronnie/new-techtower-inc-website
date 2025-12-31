<?php

namespace App\Notifications;


use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LoginOtpNotification extends Notification
{
    public function __construct(private string $code) {}

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Your Login Verification Code')
            ->view('emails.otp', [
                'code' => $this->code,
                'user' => $notifiable,
            ]);
    }
}