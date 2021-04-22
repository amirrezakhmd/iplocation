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

| Class | Description |
|---|---|
| Iplocation::getUserIp() | Get user ip |
