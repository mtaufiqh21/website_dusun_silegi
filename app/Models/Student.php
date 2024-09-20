<?php

namespace App\Models;

use App\Models\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    protected $fillable = [
        "name",
        "nis",
        "email",
        "phone_number",
        "class",
        "teacher_id",
        "address",
        "gender",
        "date_of_birth",
        "active_status"
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }
}
