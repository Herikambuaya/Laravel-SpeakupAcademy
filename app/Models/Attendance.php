<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'student_nisn',
        'status', // present, absent, excused
        'check_in_time',
    ];

    /**
     * Relasi Many-to-One: Attendance belongs to one AcademyClass.
     * Melalui Class ini, kita bisa tahu siapa Mentor yang bertanggung jawab.
     */
    public function academyClass()
    {
        return $this->belongsTo(AcademyClass::class, 'class_id');
    }

    /**
     * Relasi Many-to-One: Attendance belongs to one Student.
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_nisn', 'nisn');
    }

    /**
     * Aksesor untuk mendapatkan Mentor yang bertanggung jawab atas sesi presensi ini.
     * (Mentor diakses melalui relasi AcademyClass)
     *
     * @return \App\Models\Mentor|null
     */
    public function mentor()
    {
        return $this->academyClass ? $this->academyClass->mentor : null;
    }
}
