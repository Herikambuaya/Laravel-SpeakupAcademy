<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment_id',
        'student_nisn',
        'file_path',
        'content', // for text submission
        'grade',
        'feedback',
        'submitted_at',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];

    /**
     * Relasi Many-to-One: Submission belongs to one Assignment.
     */
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    /**
     * Relasi Many-to-One: Submission belongs to one Student.
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_nisn', 'nisn');
    }
}
