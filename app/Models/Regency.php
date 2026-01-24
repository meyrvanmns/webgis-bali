<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regency extends Model
{
    protected $table = 'regencies';
    protected $guarded = [];

    /**
     * Relasi: Satu kabupaten memiliki banyak kecamatan
     */
    public function districts(): HasMany
    {
        return $this->hasMany(districts::class, 'regency_id');
    }
}