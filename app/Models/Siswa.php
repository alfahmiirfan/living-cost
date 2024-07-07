<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'siswa';

    protected $fillable = [
        'tahun_masuk',
        'password',
        'angkatan',
        'nisn',
        'nama',
        'year_id',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function income()
    {
        return $this->hasMany(Income::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
