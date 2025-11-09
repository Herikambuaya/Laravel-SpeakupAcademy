<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'title',
        'description',
        'due_date',
        'max_score',
    ];

    protected $casts = [
        'due_date' => 'datetime',
    ];

    /**
     * Relasi Many-to-One: Assignment belongs to one Mentor.
     */
    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    /**
     * Relasi One-to-Many: Assignment memiliki banyak Submission.
     */
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
