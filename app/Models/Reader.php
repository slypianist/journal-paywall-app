<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reader extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password'

    ];

    protected $hidden = [
        'password',

    ];
}
