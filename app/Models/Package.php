<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'duration_days',
        'discount_percentage',
        'description',
    ];

    /**
     * Relasi One-to-Many: Package memiliki banyak Enrollment (transaksi pembelian).
     */
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
