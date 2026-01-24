<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class districts extends Model
{
    protected $table = 'districts'; // Memastikan Laravel membaca tabel yang benar
    protected $guarded = []; // Memungkinkan input data massal dari seeder

    /**
     * Relasi: Setiap kecamatan memiliki satu kabupaten (Regency)
     */
    public function regency(): BelongsTo
    {
        return $this->belongsTo(Regency::class, 'regency_id');
    }
}