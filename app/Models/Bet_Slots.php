<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bet_Slots extends Model
{
    use HasFactory;

    protected $fillable = [
        'bet',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
