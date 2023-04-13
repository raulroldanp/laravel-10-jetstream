<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostBox extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'post_text'
    ];

    public function votes(): HasMany
    {
        return $this->hasMany(PostVote::class);
    }
}
