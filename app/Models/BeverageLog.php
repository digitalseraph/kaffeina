<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BeverageLog extends Model
{

    /**
     * user
     *
     * The user that owns this log entry
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * beverage
     *
     * The beverage that belongs to this log entry
     *
     * @return HasOne
     */
    public function beverage(): HasOne
    {
        return $this->hasOne('App\Models\Beverage');
    }

    /**
     * consumedAt
     *
     * A user-friendly date time for this log entry
     *
     * @return DateTime
     */
    public function consumedAt(): DateTime
    {
        return DateTime($this->consumed_at);
    }
}
