<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $guruded=[];
    protected $fillable =   [
        'fullName',
        'email',
        'userPhone',   
        'userNotification',     
        'otp',  
        'password',
        'genderId',
        'userLevel'
        
    ];
}
