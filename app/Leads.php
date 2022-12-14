<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $table = 'leads';

    protected $fillable = [
        'name',
        'email',
        'number',
        'subject',
    ];
}
