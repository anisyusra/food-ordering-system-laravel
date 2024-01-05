<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    Protected $fillable =
    [
        'category_id',
        'dish_name',
        'dish_detail',
        'dish_image',
        'dish_status',
        'full_price',
        'half_priec',
        'dish_status'
    ];

    Protected $primaryKey = 'dish_id';
}
