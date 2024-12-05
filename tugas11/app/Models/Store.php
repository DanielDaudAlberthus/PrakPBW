<?php

namespace App\Models;

use App\Observers\StoreObserver;
use illuminate\database\Eloquent\Attributes\ObservedBy;
use illuminate\database\Eloquent\Model;
use illuminate\database\Eloquent\Relations\BelongsTo;


#[ObservedBy(StoreObserver::class)]


class Store extends Model
{
    protected $fillable = [
        'logo',
        'name',
        'slug',
        'description',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}