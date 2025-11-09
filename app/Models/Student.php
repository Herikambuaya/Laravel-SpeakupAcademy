<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'nisn';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nisn',
        'name',
        'level_id',
        'jenjang_pendidikan',
        'alasan_mengikuti',
    ];

    /**
     * Relasi Polymorphic: Student terhubung ke Model User (akun otentikasi).
     */
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    /**
     * Relasi Many-to-One: Student belongs to one Level.
     */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    /**
     * Relasi Many-to-Many: Student terdaftar di banyak AcademyClass (via tabel pivot class_student).
     */
    public function classes()
    {
        return $this->belongsToMany(AcademyClass::class, 'class_student', 'student_nisn', 'class_id');
    }

    /**
     * Relasi One-to-Many: Student memiliki banyak Submission.
     */
    public function submissions()
    {
        return $this->hasMany(Submission::class, 'student_nisn', 'nisn');
    }

    /**
     * Relasi One-to-Many: Student memiliki banyak Attendance.
     */
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'student_nisn', 'nisn');
    }

    /**
     * Relasi One-to-Many: Student memiliki Sertifikat.
     */
    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'student_nisn', 'nisn');
    }

    /**
     * Relasi Many-to-Many: Student memiliki banyak Badge.
     */
    public function badges()
    {
        return $this->belongsToMany(Badge::class, 'user_badges', 'student_nisn', 'badge_id');
    }

    /**
     * Relasi One-to-Many: Student memiliki banyak Enrollment (transaksi).
     */
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'student_nisn', 'nisn');
    }
}
