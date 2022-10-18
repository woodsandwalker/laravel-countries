<?php

namespace WW\Countries\Rules;

use Illuminate\Contracts\Validation\Rule;
use WW\Countries\Models\Country as CountryModel;

class Country implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return CountryModel::whereIsoCode($value)->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        $message = trans('validation.country');

        return $message === 'validation.country'
            ? ['The selected :attribute is not a valid country.']
            : $message;
    }
}
