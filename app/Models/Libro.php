<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Libro extends Model
{
    use HasFactory;

    public function autor(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }

    public function alquileres(): HasMany
    {
        return $this->hasMany(Alquiler::class);
    }
}
