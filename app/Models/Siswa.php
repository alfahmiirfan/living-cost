<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Siswa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'siswa';

    protected $fillable = [
        'tahun_masuk',
        'kata_sandi',
        'angkatan',
        'nama',
        'nisn', // unique
    ];

    protected $hidden = [
        'kata_sandi',
    ];

    protected $casts = [
        'kata_sandi' => 'hashed',
    ];
}
