<?php

namespace WW\Countries\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use WW\Countries\Models\Country as CountryModel;

class Country implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return \WW\Countries\Models\Country
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return CountryModel::whereIsoCode($value)->first();
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return strtoupper($value);
    }
}
