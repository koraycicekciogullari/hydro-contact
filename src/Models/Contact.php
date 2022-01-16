<?php

namespace Koraycicekciogullari\HydroContact\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'subject', 'content', 'ip_address', 'is_read'];

}
