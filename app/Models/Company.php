<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'city_id',
        'name'
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
