<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'owner',
        'title',
        'short_description',
        'price',
        'phone_number',
        'image',
        'active_status',
    ];
}
