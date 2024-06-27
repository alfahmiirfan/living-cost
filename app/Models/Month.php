<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Month extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'month';

    protected $guarded = ['id'];

    public function income()
    {
        return $this->hasMany(Income::class);
    }
}