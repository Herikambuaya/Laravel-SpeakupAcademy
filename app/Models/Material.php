<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'title',
        'file_path',
        'type', // video, document, quiz, audio
    ];

    /**
     * Relasi Many-to-One: Material belongs to one Mentor.
     */
    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    /**
     * Relasi Many-to-Many: Material terhubung ke banyak AcademyClass (via tabel pivot class_material).
     */
    public function classes()
    {
        return $this->belongsToMany(AcademyClass::class, 'class_material', 'material_id', 'class_id')->withPivot('module_number');
    }
}
