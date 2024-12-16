<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Children extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'photo',
        'age',
        'naughty',
    ];
}
