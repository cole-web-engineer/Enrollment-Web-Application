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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;


class AdminMessage extends Notification
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
        //$applicant= Applicant::all();
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
        $passport = $this->app_info['idpassport'];
        $address = $this->app_info['address'];
        $city = $this->app_info['city'];
        $one = $this->app_info['scannedidpassport'];
        $two = $this->app_info['proof_of_residence'];
        $three = $this->app_info['childbirth_cert'];
        $four = $this->app_info['learners_report'];

        //Attachments

        $result = \File::exists('storage/uploads/ids/'.$this->app_info['scannedidpassport']);
        if ($result > 0)
        {
            $idpassport = url("storage/uploads/ids/".$this->app_info['scannedidpassport']);
        }
        else
        {
            $idpassport = url("storage/uploads/no_file_upload.png");
        }
        // 2nd Check !!!
        $result1 = \File::exists('storage/uploads/residence/'.$this->app_info['proof_of_residence']);
        if ($result1 > 0)
        {
            $resdience = url("storage/uploads/residence/".$this->app_info['proof_of_residence']);
        }
        else
        {
            $resdience = url("storage/uploads/no_file_upload.png");
        }
        // 3rd Check !!
        $result2 = \File::exists('storage/uploads/childbirthcert/'.$this->app_info['childbirth_cert']);
        if ($result2 > 0)
        {
            $childbirth = url("storage/uploads/childbirthcert/".$this->app_info['childbirth_cert']);
        }
        else
        {
            $childbirth = url("storage/uploads/no_file_upload.png");
        }
        // 4th Check !!!
        $result3 = \File::exists('storage/uploads/childreport/'.$this->app_info['learners_report']);
        if ($result3 > 0)
        {
            $report = url("storage/uploads/childreport/".$this->app_info['learners_report']);
        }
        else
        {
            $report = url("storage/uploads/no_file_upload.png");
        }
        // Let it roll
        return (new MailMessage)
                    ->from('noreply@taalct.co.za', 'Online Registration')
                    ->line('Hi, New Online Application Recieved.')
                    ->subject('New Applicant')
                    ->action('Visit Here To Access Admin Panel', url('/'))
                    ->line('Thank you for Applying With Us')
                    ->view('vendor.mail.markdown.admin',
                        compact(
                        'parent', 'email',
                        'mobile', 'childfirstname',
                        'childlastname', 'education_level', 'grade',
                        'gender', 'enrol_type', 'school_branch', 'startyear', 'passport', 'city', 'address',
                        'one', 'two', 'three', 'four'
                        ))
                        ->attach($idpassport, [
                            // Swift Mailer Cant Read File Without Mime Type Defined !!!
                            'mime' => 'application/pdf', 'image/jpeg', 'image/png', 'image/jpg', 'image/bmp'
                        ])
                        ->attach($resdience, [
                            // Swift Mailer Cant Read File Without Mime Type Defined !!!
                            'mime' => 'application/pdf', 'image/jpeg', 'image/png', 'image/jpg', 'image/bmp'
                        ])
                        ->attach($childbirth, [
                            // Swift Mailer Cant Read File Without Mime Type Defined !!!
                            'mime' => 'application/pdf', 'image/jpeg', 'image/png', 'image/jpg', 'image/bmp'
                        ])
                        ->attach($report, [
                            // Swift Mailer Cant Read File Without Mime Type Defined !!!
                            'mime' => 'application/pdf', 'image/jpeg', 'image/png', 'image/jpg', 'image/bmp'
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
