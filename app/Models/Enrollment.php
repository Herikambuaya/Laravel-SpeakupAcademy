<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_nisn',
        'package_id',
        'batch_id',
        'enrollment_date',
        'payment_status', // paid, pending, failed
        'amount_paid',
    ];

    protected $casts = [
        'enrollment_date' => 'date',
    ];

    /**
     * Relasi Many-to-One: Enrollment belongs to one Student.
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_nisn', 'nisn');
    }

    /**
     * Relasi Many-to-One: Enrollment belongs to one Package.
     */
    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    /**
     * Relasi Many-to-One: Enrollment belongs to one Batch.
     */
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
