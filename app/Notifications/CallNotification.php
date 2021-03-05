<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CallNotification extends Notification
{
    use Queueable;


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $return = (new MailMessage)
            ->line('Veuillez contacté : ' . $notifiable->name .
                ' sur son numéro ' . $notifiable->phone .
                ' ou sur son adresse email ' . $notifiable->email .
                ' ' . $notifiable->day . ' ' . $notifiable->time
            );
        $notifiable->email = config('app.data.contact_mail');
        return $return;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
