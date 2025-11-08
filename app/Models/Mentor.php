<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $primaryKey = 'mentor_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'mentor_id',
        'name',
        'expertise',
        'bio',
    ];

    /**
     * Relasi Polymorphic: Mentor terhubung ke Model User (akun otentikasi).
     */
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    /**
     * Relasi One-to-Many: Mentor mengajar banyak AcademyClass.
     */
    public function classes()
    {
        return $this->hasMany(AcademyClass::class);
    }

    /**
     * Relasi One-to-Many: Mentor dapat membuat banyak Material.
     */
    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    /**
     * Relasi One-to-Many: Mentor dapat membuat banyak Assignment.
     */
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
