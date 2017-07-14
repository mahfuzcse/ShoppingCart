<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
     'email','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];
}
