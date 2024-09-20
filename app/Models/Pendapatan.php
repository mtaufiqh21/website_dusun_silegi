<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    use HasFactory;

    protected $table = "pendapatans";

    protected $fillable = [
        'nominal_pendapatan',
        'tahun',
        'active_status'
    ];
}
