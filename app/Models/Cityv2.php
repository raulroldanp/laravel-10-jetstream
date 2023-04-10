<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cityv2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'name',
        'county',
        'latitude',
        'longitude'
    ];
    
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
