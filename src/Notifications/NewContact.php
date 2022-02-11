<?php

namespace Koraycicekciogullari\HydroContact\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewContact extends Notification
{
    use Queueable;

    /**
     * @param $notifiable
     * @return string[]
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * @param $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Adı, Soyadı: ' . $notifiable->name)
            ->line('E-Posta: ' . $notifiable->email)
            ->line('Konu: ' . $notifiable->subject)
            ->line($notifiable->content);
    }
}
