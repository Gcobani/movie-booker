<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Theatre extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'booked_seats',
    ];

    /**
     * @return HasMany
     */
    public function films(): HasMany
    {
        return $this->hasMany(Film::class);
    }

    /**
     * @return BelongsTo
     */
    public function cinemaLocation(): BelongsTo
    {
        return $this->belongsTo(CinemaLocation::class);
    }
}
