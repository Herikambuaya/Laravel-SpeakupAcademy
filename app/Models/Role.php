<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi secara massal (nama peran).
     */
    protected $fillable = [
        'name', // Contoh: 'admin', 'mentor', 'student'
        'description', // Deskripsi peran
    ];

    /**
     * Relasi Many-to-Many: Role memiliki banyak User.
     * Relasi ini mengasumsikan adanya tabel pivot 'role_user'.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
