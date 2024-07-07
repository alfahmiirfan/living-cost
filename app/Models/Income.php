<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Income extends Model implements HasMedia
{
    use InteractsWithMedia, SoftDeletes;

    protected $table = 'income';

    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    public function harga()
    {
        return $this->belongsTo(Harga::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
