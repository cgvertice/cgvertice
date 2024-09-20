<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Notifications\Messages\MailMessage;

class CustomResetPassword extends ResetPasswordNotification
{
    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url('/reset-password', $this->token);

        return (new MailMessage)
            ->subject('Restablecer contraseña GCVERTICE')
            ->line('Está recibiendo este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para su cuenta.')
            ->action('click aqui para restablecer contraseña', $url)
            ->line('Si no solicitó un restablecimiento de contraseña, no es necesario realizar ninguna otra acción.');
    }
}