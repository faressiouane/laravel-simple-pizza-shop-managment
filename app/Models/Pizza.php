<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    //automaticlly connected to pizzas table via plurlizing the given model name
    //protected $table = 'pizzas';

    protected $casts = [
        'toppings' => 'array'
    ];
    
}
