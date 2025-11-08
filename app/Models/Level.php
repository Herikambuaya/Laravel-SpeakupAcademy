<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Relasi One-to-Many: Level memiliki banyak Student.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Relasi One-to-Many: Level memiliki banyak AcademyClass.
     */
    public function classes()
    {
        return $this->hasMany(AcademyClass::class);
    }
}
