<x-mail::message>

# Login Verification Code

Here is your login verification code:

<div style="text-align: center; margin: 24px 0;">
    <div style="
        display: inline-block;
        font-size: 32px;
        font-weight: bold;
        letter-spacing: 8px;
        padding: 16px 28px;
        border: 2px solid #3b82f6;
        border-radius: 6px;
        background-color: #eff6ff;
        color: #1e40af;
        text-align: center;
        user-select: all;
    ">
        {{ $otp }}
    </div>
</div>

Please make sure you never share this code with anyone.

**Note:** This code will expire in 10 minutes.

Best Regards,  
The {{ config('app.name') }} Team

</x-mail::message>
