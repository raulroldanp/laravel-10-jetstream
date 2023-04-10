<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
        'code'
    ];

    public function cities(): HasMany {
        return $this->hasMany(Cityv2::class);
    }

    public function country(): BelongsTo {
        return $this->belongsTo(Countryv2::class);
    }
}
