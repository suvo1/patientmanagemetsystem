<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Add extends Notification
{
    use Queueable;
    public $prescription;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($prescription)
    {
        $this->prescription = $prescription;
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
                    ->subject('New Prescription Created')
                    ->greeting('hello,' .$this->prescription->user->name. ' !')
                    ->line('Prescription:')
                    ->line('Patient Name:' .$this->prescription->patient_name. '!')
                    ->line('Medicine:' .$this->prescription->med_name. '!')
                    ->line('Age:' .$this->prescription->age. '!')
                    ->line('Blood Group:' .$this->prescription->blood_group. '!')
                    ->line('Disease:' .$this->prescription->disease. '!')
                    ->line('Test:' .$this->prescription->test. '!')
                
                    ->line('Thank you for using our application!');
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
