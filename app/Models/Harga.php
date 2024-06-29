<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $table = 'harga';

    protected $guarded = ['id'];

    public function income()
    {
        return $this->hasMany(Income::class);
    }
}