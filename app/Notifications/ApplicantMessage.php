<?php

namespace App\Notifications;

use App\Applicant;
use App\Http\Controllers\ApplicantController;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use http\Url;
use App\App_info;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;

class ApplicantMessage extends Notification
{
    use Queueable;
    public $app_info;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($app_info)
    {
        // Muriwo we Data
        $this->app_info = $app_info;
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
        // Array to Simpler vars
        $parent = $this->app_info['name'];
        $email = $this->app_info['email'];
        $mobile = $this->app_info['mobile'];
        $childfirstname = $this->app_info['childfirstname'];
        $childlastname = $this->app_info['childlastname'];
        $education_level = $this->app_info['education_level'];
        $grade = $this->app_info['grade'];
        $gender = $this->app_info['gender'];
        $enrol_type = $this->app_info['enrol_type'];
        $school_branch = $this->app_info['school_branch'];
        $startyear = $this->app_info['startyear'];

        return (new MailMessage)
                    ->from('noreply@taalct.co.za', 'Online Registration')
                    ->line('Hi, New Online Application Recieved.')
                    ->subject('Welcome Applicant')
                    ->action('Visit Here To Access Admin Panel', url('/'))
                    ->line('Thank you for Applying With Us')
                    ->view('vendor.mail.markdown.applicant',
                            compact(
                                'parent', 'email',
                                'mobile', 'childfirstname',
                                'childlastname', 'education_level', 'grade',
                                'gender', 'enrol_type', 'school_branch', 'startyear'
                            ));
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
