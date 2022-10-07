<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class orders extends Model
{
    use HasFactory;


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function orderLines(): HasMany
    {
        return $this->HasMany(orderLines::class);
    }

    /**
     *@var array
     */

    protected $casts = [
        'panier' => 'array',

    ];
}
