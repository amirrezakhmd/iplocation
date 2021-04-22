# Laravel IPLocation Package
A package to get data from users ip in laravel.

## Installation
You should install package with composer:
```bash
composer require amirjeyz/iplocation
```

## Configuration:
### Step 1:
To get started, you'll need to publish all vendor assets:
```bash
php artisan vendor:publish
```
### Step 2:
Get API from [IPStack](https://ipstack.com/) and then in `config/iplocation.php` add your api key.

## Usage
To use from package you must use `use Amirjeyz\Iplocation\Iplocation` in your controller.
```php
use Amirjeyz\Iplocation\Iplocation;

class IplocationController extends Controller
{
    public function index()
    {
        return Iplocation::all();
    }
}
```
## Classes
List of classes with description for use in your controller

| Class | Description |
|---|---|
| Iplocation::all() | Get all data from users ip |
| Iplocation::getUserIp() | Get user ip |
| Iplocation::getUserCountry() | Get user country from ip |
| Iplocation::getUserCity() | Get user city from ip |
| Iplocation::getUserLanguage() | Get user language from ip |
| Iplocation::getUserCountryFlag() | Get user country flag from ip |
| Iplocation::getUserProvince() | Get user province from ip |
| Iplocation::getUserCallingCode() | Get user calling code from country and ip |
