<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyCard extends Model
{
    use HasFactory;

    protected $table = "family_cards";

    protected $fillable = [
        'no_kk',
        'name',
        'address',
        'phone_number',
        'family_card_identity',
        'wilayah',
        'rw',
        'rt',
        'active_status'
    ];
}
