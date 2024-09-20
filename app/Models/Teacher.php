<?php

namespace App\Models;

use App\Models\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;

    protected $table = "teachers";

    protected $fillable = [
        "nip",
        "email",
        "name",
        "user_id",
        "position_category",
        "position",
        "image",
        "gender",
        "active_status"
    ];

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function mapel(): HasMany
    {
        return $this->hasMany(Mapel::class, "teacher_id");
    }
}
