<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'parent_id', // for replies
    ];

    /**
     * Relasi Many-to-One: ForumPost belongs to one User (bisa Admin, Mentor, atau Student).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi Self-Referencing: Untuk Reply/Komentar.
     */
    public function parent()
    {
        return $this->belongsTo(ForumPost::class, 'parent_id');
    }

    /**
     * Relasi Self-Referencing: Untuk Reply/Komentar.
     */
    public function replies()
    {
        return $this->hasMany(ForumPost::class, 'parent_id');
    }
}
