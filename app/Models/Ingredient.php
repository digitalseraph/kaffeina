<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{

    protected $fillable = ['name', 'caffeine_amount'];

    /**
     * beverages
     *
     * All the beverages that use this ingredient
     *
     * @return BelongsToMany
     */
    public function beverages()
    {
        return $this->belongsToMany('App\Models\Beverage')->using('App\Models\BeverageIngredient');
    }
}
