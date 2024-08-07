<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;

    protected $table = 'harga';

    protected $guarded = ['id'];

    public function income()
    {
        return $this->hasMany(Income::class);
    }
}
