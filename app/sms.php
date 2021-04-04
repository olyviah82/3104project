<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sms extends Model
{
    //
    protected $fillable = ['admin', 'fullname', 'surname', 'nationalid', 'speciality', 'email', 'age', 'guardianfname', 'guarrdian_nationalid', 'guardian_mobile'];
}