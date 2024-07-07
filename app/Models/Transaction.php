<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';

    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function income()
    {
        return $this->belongsTo(Income::class);
    }
}
