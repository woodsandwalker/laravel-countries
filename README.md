# Laravel Countries
[![Packagist Downloads](https://img.shields.io/packagist/dt/woodsandwalker/laravel-countries?color=brightgreen?)](https://packagist.org/packages/woodsandwalker/laravel-countries)
[![Packagist Version](https://img.shields.io/packagist/v/woodsandwalker/laravel-countries?color=brightgreen?)](https://packagist.org/packages/woodsandwalker/laravel-countries)

Laravel Countries is a bundle for Laravel providing ISO 3166_2 codes for all countries along with a country model, cast and validation rule.

## Getting Stated

### Installation

```shell
composer require woodsandwalker/laravel-countries
```

### Model

The package contains a [calebporzio/sushi](https://packagist.org/packages/calebporzio/sushi) model which contains the `iso_code` and `name` for each country. Using this type of model also means there is no database migration required.

This model can be used like any other Laravel model.

```php
$countryName = \WW\Countries\Models\Country::whereIsoCode('GB')->first()->name;
```

### Validation Rule

The package contains a validation rule which validates the ISO code.

```php
$data = $request->validate([
    'country' => ['required', new \WW\Countries\Rules\Country]
]);
```

You can override the default validation error message using the `validation.country` key in your lang files.

### Model Attribute Cast

The package contains a model attribute cast. The cast expects the ISO code as the original attribute.

You can use the following migration to add a country column to the users table.

```php
Schema::table('users', function (Blueprint  $table) {
    $table->char('country', 2);
});
```

Then add the cast to the user model:

```php
class User extends Model
{
    /**
     * The attributes that should be cast.
     * 
     * @var array
     */
    protected $casts = [
	    'country' => \WW\Countries\Casts\Country::class,
    ];
}
```

Store a country against a user:

```php
$user->country = 'GB';
$user->save();
```

You can now access the ISO code and the name on the country attribute on the user model:

```php
$user = User::find(1);

$countryIsoCode = $user->country->iso_code; // GB
$countryName = $user->country->name; // United Kingdom
```

## License

Laravel Countries is released under the MIT License. See the bundled LICENSE.md file for details.