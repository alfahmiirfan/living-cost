<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Siswa extends Model
{
    use SoftDeletes;

    protected $table = 'siswa';

    protected $guarded = ['id'];

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
