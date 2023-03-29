<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CinemaLocation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'what3words'
    ];

    /**
     * @return HasMany
     */
    public function theatres(): HasMany
    {
        return $this->hasMany(Theatre::class);
    }

    /**
     * @return string[]
     */
    public static function listify(): array
    {
        return static::all()
            ->pluck('address', 'id')
            ->sort()
            ->toArray();
    }
}
