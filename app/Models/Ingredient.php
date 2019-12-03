<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{

    /**
     * beverages
     *
     * All the beverages that use this ingredient
     *
     * @return BelongsToMany
     */
    public function beverages(): BelongsToMany
    {
        return $this->belongsToMany(
                        'App\Models\Beverage',
                        'beverage_ingredients',
                        'id',
                        'ingredient_id')
                    ->using('App\Models\BeverageIngredient')
                    ->withPivot('ingredient_amount');
    }
}
