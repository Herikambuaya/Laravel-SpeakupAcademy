<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    /**
     * Relasi One-to-Many: Batch memiliki banyak AcademyClass.
     */
    public function classes()
    {
        return $this->hasMany(AcademyClass::class);
    }

    /**
     * Relasi One-to-Many: Batch memiliki banyak Certificate.
     */
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    /**
     * Relasi One-to-Many: Batch memiliki banyak Enrollment.
     */
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
