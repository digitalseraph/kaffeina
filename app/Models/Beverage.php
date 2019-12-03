<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Beverage extends Model
{
    /**
     * ingredients
     *
     * All the ingredients that this beverage includes
     *
     * @return BelongsToMany
     */
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient')->using('App\Models\BeverageIngredient');
    }

    /**
     * totalCaffeine
     *
     * The total amount of caffeine contained in this beverage
     *
     * @return int
     */
    public function totalCaffeine()
    {
        $totalCaffeine = 0;
        foreach($this->ingredients as $ingredient) {
            $totalCaffeine += $ingredient->caffeineAmount;
        }

        return $totalCaffeine;
    }
}
