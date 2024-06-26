<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['firstName', 'lastName', 'email', 'phone', 'date', 'description', 'status'];


    protected $casts = [
        'date' => 'date',  
    ];
}
