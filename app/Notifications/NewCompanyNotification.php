<?php

namespace App\Notifications;

use App\Modules\Company\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCompanyNotification extends Notification
{
    use Queueable;

    protected $companyInfo;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Company $company)
    {
        $this->companyInfo = $company;
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
            ->greeting('Hello, ' . $this->companyInfo->name)
            ->line('Welcome to our system')
            ->action('Get started', route('dashboard'))
            ->line('Your company has been successfully registered in our system.')
            ->line('Here are your account details:')
            ->line('Company Name: ' . $this->companyInfo->name)
            ->line('Email: ' . $this->companyInfo->email)
            ->line('Phone: ' . $this->companyInfo->phone)
            ->line('Thank you for joining our platform!')
            ->attach(public_path('uploads/comapanies-logo/' . $this->companyInfo->logo), [
                'as' => 'logo.png',
                'mime' => 'image/png'
            ]);
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
