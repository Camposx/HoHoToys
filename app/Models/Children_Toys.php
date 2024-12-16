<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Children_Toys extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_child',
        'id_toy',
    ];
}
