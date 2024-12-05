<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class menu extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nama_Menu',
        'harga',
        'deskripsi',
        'detail',
        'kalori',
        'path',
        'stock'
    ];

    public function orders()
    {
        return $this->hasMany(keranjang::class);
    }



}
