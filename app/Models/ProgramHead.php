<?php

namespace App\Models;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramHead extends Model
{
    protected $fillable = [
        'user_id',
        'department_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, "department_id", "id");
    }
}
