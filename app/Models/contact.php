<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class contact extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes, Notifiable;
    //

    // Fillables utk mass assignment
    protected $fillable = [
        'name',
        'email',
        'subject',
        'phone',
        'message',
    ];
}
