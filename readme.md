# Laravel 5 Humans.txt

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]

Stop polluting your customers footers with a "made by my agency so I put a cheap link in the footer"-link – that footer is your customers property. Instead, if you want credit – add a simple humans.txt.

All this package does is to add a route for `/humans.txt` and the associated view. "Why would I ever need a package for a simple thing like this?" you wonder? Well, so did I until I had done it over 20 times – it just saves a few minutes which adds up over time.

## Install

Install via composer:

``` bash
$ composer require olssonm/l5-humans
```

Add the service provider to your `app.php`:

``` php
'providers' => [
    Olssonm\Humans\ServiceProvider::class
]
```

Publish the view:

``` bash
$ php artisan vendor:publish --provider="Olssonm\Humans\ServiceProvider"
```

## Make it your own

The view is located in your views-folder `/humans/humans.blade.php`.

It's also valid to put this in your `<head>`:

``` html
<link type="text/plain" rel="author" href="http://domain/humans.txt" />
```

## Learn more

Learn more about the humans.txt-standard at [humanstxt.org](http://humanstxt.org/).

## Testing

``` bash
$ composer test
```

or

``` bash
$ phpunit
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

© 2016 [Marcus Olsson](https://marcusolsson.me).

[ico-version]: https://img.shields.io/packagist/v/olssonm/l5-humans.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/olssonm/l5-humans/master.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/olssonm/l5-humans
[link-travis]: https://travis-ci.org/olssonm/l5-humans
