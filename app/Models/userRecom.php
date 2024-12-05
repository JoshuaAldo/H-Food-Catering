<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class userRecom extends Model
{
    use HasFactory;
    protected $table = 'user_recoms';

    protected $fillable = [
        'user_id',
        'age', 
        'weight', 
        'height', 
        'gender', 
        'activity_level',
        'kalori',
    ];

}
