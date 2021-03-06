# Suprnova
Laravel wrapper for Suprnova API

**Suprnova** is a Suprnova api wrapper for Laravel 5.5

## Install

    composer require krorten/suprnova

### Post Install
After installing, register the `Krorten\Suprnova\Providers\CryptocompProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    Krorten\Suprnova\Providers\SuprnovaProvider::class,
],
```

Also, add the `Suprnova` facade to the `aliases` array in your `app` configuration file:

```php
'Suprnova' => Krorten\Suprnova\Facades\SuprnovaFacade::class,    
```

### Examples
You need to set the type of coin before you can retreive any info. And also the API Key found in your account
```php
//Get user(wallet addr) general summary
Suprnova::setType('zec')->setApiKey('')->user();
```
```php
//Get list of workers with connected to user(wallet addr)
Suprnova::setType('eth')->setApiKey('')->workers();

//Other actions to use
->hashrate
->balance
->dashboard
->transactions
```
## License

Suprnova API Wrapper is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)