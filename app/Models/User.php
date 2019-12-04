<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'max_caffeine_amount', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * beverageLogs
     *
     * The logs that contain records of the user's consumption history
     *
     * @return HasMany
     */
    public function beverageLogs()
    {
        return $this->hasMany('App\Models\BeverageLog');
    }


    public function currentCaffeineAmount()
    {
        $caffeine_expiration_time = config('kaffeina.settings.caffeine_expiration_time');
        $beverage_logs = $this->beverageLogs->where('consumed_at', ">", '-' . $caffeine_expiration_time . 'hours');

        $current_caffeine_amount = 0;
        foreach ($beverage_logs as $beverage_log) {
            $current_caffeine_amount += $beverage_log->totalCaffeineAmount();
        }

        return $current_caffeine_amount;
    }

    public function lifetimeCaffeineAmount()
    {
        $beverage_logs = $this->beverageLogs;

        $lifetime_caffeine_amount = 0;
        foreach ($beverage_logs as $beverage_log) {
            $lifetime_caffeine_amount += $beverage_log->totalCaffeineAmount();
        }

        return $lifetime_caffeine_amount;
    }

    public function allowedCaffeineAmount()
    {
        $currentCaffeine = $this->currentCaffeineAmount();
        $totalCaffeineAllowed = $this->max_caffeine_amount;

        return $totalCaffeineAllowed - $currentCaffeine;
    }

    public function percentageAllowed()
    {
        $currentCaffeine = $this->currentCaffeineAmount();
        $totalCaffeineAllowed = $this->max_caffeine_amount;

        return ($currentCaffeine / $totalCaffeineAllowed) * 100;
    }
}
