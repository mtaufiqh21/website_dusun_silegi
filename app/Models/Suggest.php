<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    use HasFactory;
    protected $table = 'suggests';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'suggestion',
        'active_status'
    ];
}
