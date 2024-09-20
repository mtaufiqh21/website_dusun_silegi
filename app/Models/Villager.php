<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villager extends Model
{
    use HasFactory;

    protected $table = "villagers";

    protected $fillable = [
        'nik',
        'name',
        'email',
        'phone_number',
        'address',
        'gender',
        'identity_card',
        'active_status',
    ];
}
