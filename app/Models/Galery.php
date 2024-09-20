<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    protected $table = 'galeries';

    protected $fillable = [
        'image_name',
        'image',
        'description',
        'active_status'
    ];
}
