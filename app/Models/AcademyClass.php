<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyClass extends Model
{
    use HasFactory;

    protected $table = 'academy_classes'; // Pastikan nama tabel benar

    protected $fillable = [
        'batch_id',
        'mentor_id',
        'level_id',
        'name',
        'unique_code',
    ];

    /**
     * Relasi Many-to-One: AcademyClass belongs to one Batch.
     */
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    /**
     * Relasi Many-to-One: AcademyClass belongs to one Mentor.
     */
    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    /**
     * Relasi Many-to-One: AcademyClass belongs to one Level.
     */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    /**
     * Relasi Many-to-Many: AcademyClass memiliki banyak Student (via tabel pivot class_student).
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'class_student', 'class_id', 'student_nisn');
    }

    /**
     * Relasi Many-to-Many: AcademyClass memiliki banyak Material (via tabel pivot class_material).
     */
    public function materials()
    {
        return $this->belongsToMany(Material::class, 'class_material', 'class_id', 'material_id')->withPivot('module_number');
    }

    /**
     * Relasi One-to-Many: AcademyClass memiliki banyak Attendance.
     */
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
