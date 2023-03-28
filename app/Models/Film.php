<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Film extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'running_time',
        'is_showing'
    ];

    /**
     * @return BelongsTo
     */
    public function theatre(): BelongsTo
    {
        return $this->belongsTo(Theatre::class);
    }
}
