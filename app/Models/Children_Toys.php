<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Children_Toys extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_child',
        'id_toy',
    ];
}
