<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;
use Illuminate\Notifications\Messages\MailMessage;

class VerifyEmailNotification extends VerifyEmailBase
{
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);
        $appName = config('app.name');
        $logoUrl = asset('logo-email.svg');
        $name = $notifiable->name;

        return (new MailMessage)
            ->subject('Verifikasi Alamat Email Anda')
            ->view('emails.verify', [
                'appName' => $appName,
                'logoUrl' => $logoUrl,
                'verificationUrl' => $verificationUrl,
                'name' => $name,
            ]);
    }
}