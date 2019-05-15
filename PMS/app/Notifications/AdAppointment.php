<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdAppointment extends Notification
{
    use Queueable;
     public $appointment;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($appointment)
    {
       $this->appointment = $appointment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Appointment Created')
                    ->greeting('hello,' .$this->appointment->user->name. ' !')
                    ->line('Your appointment has been created.')
                    ->line('Doctor Name:' .$this->appointment->doctor_name. '!')
                    ->line('Date:' .$this->appointment->date. '!')
                    ->line('Time:' .$this->appointment->time. '!')
                    ->line('Thank you for using our application');
                  
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
