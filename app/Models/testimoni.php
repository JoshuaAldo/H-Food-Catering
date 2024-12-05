<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class testimoni extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'testimoni',
        'user_id',
        'menu_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function menu(){
        return $this->belongsTo(menu::class);
    }
}
