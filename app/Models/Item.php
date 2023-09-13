<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'category_id',
        'city_id',
        'university_id',
        'title',
        'body',
        'tags',
        'price',
        'currency_id',
        'sold',
        'contact_me_info',
    ];
}
