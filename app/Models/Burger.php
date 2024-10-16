<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_src',
        'img_alt',
        'name',
        'ingredients',
        'allergens',
        'description',
        'price',
    ];
}
