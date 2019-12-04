<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BeverageLog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'beverage_id', 'consumed_at'];

    /**
     * user
     *
     * The user that owns this log entry
     *
     * @return BelongsTo
     */
    public function user()
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
    public function beverage()
    {
        return $this->belongsTo('App\Models\Beverage');
    }

    /**
     * consumedAt
     *
     * A user-friendly date time for this log entry
     *
     * @return DateTime
     */
    public function consumedAt()
    {
        return DateTime($this->consumed_at);
    }

    /**
     * consumedAt
     *
     * A user-friendly date time for this log entry
     *
     * @return DateTime
     */
    public function totalCaffeineAmount()
    {
        return $this->beverage->totalCaffeineAmount();
    }
}
