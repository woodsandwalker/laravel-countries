# Laravel Countries
[![Packagist Downloads](https://img.shields.io/packagist/dt/woodsandwalker/laravel-countries?color=brightgreen?)](https://packagist.org/packages/woodsandwalker/laravel-countries)
[![Packagist Version](https://img.shields.io/packagist/v/woodsandwalker/laravel-countries?color=brightgreen?)](https://packagist.org/packages/woodsandwalker/laravel-countries)

Laravel Countries is a bundle for Laravel providing ISO 3166_2 codes for all countries along with a country model, cast and validation rule.

## Getting Stated

### Installation

```shell
composer require woodsandwalker/laravel-countries
```

### Configuration

There is minimal config and the package can be used without any configuration. The only configuration option is an array of countries to exclude. This works by applying a global scope on the Country model.

To publish the configuration you can run this command:

```bash
php artisan vendor:publish --tag=countries-config
```

To exclude a country simply add its ISO code to the exclude array:

```php
[
    'exclude' => ['GB']
]
```

### Model

The package contains a [calebporzio/sushi](https://packagist.org/packages/calebporzio/sushi) model which contains the `iso_code` and `name` for each country. Using this type of model also means there is no database migration required.

This model can be used like any other Laravel model.

```php
$countryName = \WW\Countries\Models\Country::whereIsoCode('GB')->first()->name; // United Kingdom
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
$user = User::find(1);

$user->country = 'GB';
$user->save();
```

You can now access the ISO code and the name on the country attribute on the user model:

```php
$user = User::find(1);

$countryIsoCode = $user->country->iso_code; // GB
$countryName = $user->country->name; // United Kingdom
```

## Localization

When accessing a country name the model will look for a translation string of `countries.{ISO_CODE}`, for example, `countries.GB`. If this translation string cannot be found it will fallback to the `en` locale.

### Installing New Locales

A command is included with the package to install new country locales from [umpirsky/country-list](https://github.com/umpirsky/country-list). You can view all the available locales [here](https://github.com/umpirsky/country-list/tree/master/data). This command will create a new file in `lang/{locale}/countries.php`. This command uses the `file_get_contents` function which requires `allow_url_fopen` to be on in your PHP config.

To install a new locale, for example Spanish (es), run the command:

```bash
php artisan countries:install-translation es
```

## License

Laravel Countries is released under the MIT License. See the bundled LICENSE.md file for details.