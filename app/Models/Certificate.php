<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'certificate_code',
        'student_nisn',
        'batch_id',
        'grade_point_average',
        'issue_date',
        'file_path',
    ];

    protected $casts = [
        'issue_date' => 'date',
    ];

    /**
     * Relasi Many-to-One: Certificate belongs to one Student.
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_nisn', 'nisn');
    }

    /**
     * Relasi Many-to-One: Certificate belongs to one Batch.
     */
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
