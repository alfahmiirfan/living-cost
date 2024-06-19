<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tahun_masuk',
        'kata_sandi',
        'angkatan',
        'id_admin',
        'email',
        'nama',
        'nisn',
        'otp',
    ];

    protected $hidden = [
        'kata_sandi',
    ];

    protected $casts = [
        'kata_sandi' => 'hashed',
    ];
}
