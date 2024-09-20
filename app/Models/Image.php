<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $table = "images";

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = [
        "url",
        "user_id",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
