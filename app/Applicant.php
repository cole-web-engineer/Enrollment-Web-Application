<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Applicant extends Model
{
    //
    use Notifiable;
    protected $fillable = [
        // Parent / Guardian Details
        'name',
        'email',
        'idpassport',
        'mobile',
        'address',
        'city',
        // Child Details
        'childfirstname',
        'childlastname',
        'DOB',
        'education_level',
        'grade',
        'gender',
        // Enrollment options
        'enrol_type',
        'previous_school',
        'startyear',
        'school_branch',
        // Uploads (optional)
        'scannedidpassport',
        'proof_of_residence',
        'childbirth_cert',
        'learners_report'
    ];

    protected $hidden = [
        'payment',
        'enrollment',
        'status',
    ];
}
