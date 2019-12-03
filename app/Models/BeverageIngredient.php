<?php

namespace App\Models;

use App\Models\Beverage;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BeverageIngredient extends Pivot
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * beverage
     *
     * The beverage that contains the ingredient
     *
     * @return Beverage
     */
    public function beverage()
    {
        return Beverage::find($this->beverage_id);
    }

    /**
     * ingredient
     *
     * The ingredients that go into the beverage
     *
     * @return Ingredient
     */
    public function ingredient()
    {
        return Ingredient::find($this->ingredient_id);
    }

    /**
     * servings
     *
     * The number of servings of ingredients that go into the beverage
     *
     * @return int
     */
    public function servings()
    {
        return $this->ingredient_amount;
    }
}
