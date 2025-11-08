<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'criteria',
        'icon_url',
    ];

    /**
     * Relasi Many-to-Many: Badge dimiliki oleh banyak Student (via tabel pivot user_badges).
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'user_badges', 'badge_id', 'student_nisn');
    }
}
