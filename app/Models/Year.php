<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Year extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'year';
    
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function income()
    {
        return $this->hasMany(Income::class);
    }
}