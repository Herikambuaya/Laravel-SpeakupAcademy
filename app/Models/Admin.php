<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // --- Konfigurasi Primary Key Custom (NIY) ---
    protected $primaryKey = 'niy';
    public $incrementing = false;
    protected $keyType = 'string';

    // --- Mass Assignment Protection ---
    protected $fillable = [
        'niy',
        'name',
        'phone',
    ];

    /**
     * Relasi Polymorphic: Admin terhubung ke Model User (akun otentikasi).
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    /**
     * Relasi One-to-Many: Admin dapat mengelola banyak Batch (angkatan kursus).
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function batches()
    {
        return $this->hasMany(Batch::class);
    }
}
