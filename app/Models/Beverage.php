<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'caffeine_amount', 'servings'];

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

    public function totalCaffeineAmount() {
        return $this->caffeine_amount * $this->servings;
    }
}
