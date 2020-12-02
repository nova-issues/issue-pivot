<?php

namespace App\Nova\Fields;

use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class BookPurchase
{
    /**
     * Get the pivot fields for the relationship.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            ID::make(),
            Currency::make('Price'),
            Text::make('License Key')->exceptOnForms(),
        ];
    }
}
