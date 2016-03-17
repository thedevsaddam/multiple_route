# multiple_route

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Saddam H``` ```thedevsaddam``` ```https://www.linkedin.com/in/thedevsaddam``` ```thedevsaddam@gmail.com``` ```thedevsaddam``` ```multiple_route``` ```MultipleRoute generator is helpful create any number of routes for your large laravel project.``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

Via Composer

``` bash
$ composer require thedevsaddam/multiple_route 1.0
```
Add the line in your composer.json
``` bash
"thedevsaddam/multiple_route": "1.0"
```
Open your terminal and hit the command
```bash
composer update
```

Add the line in (providers array) config/app.php
``` bash
thedevsaddam\multiple_route\multiple_routeServiceProvider::class,
```

## Usage
To make a route go to your project root and hit the command below
``` php
php artisan route:make route_name
```

To remove a route go to your project root and hit the command below
``` php
php artisan route:remove route_name
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email thedevsaddam@gmail.com instead of using the issue tracker.

## Credits

- [Saddam H][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/thedevsaddam/multiple_route.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/thedevsaddam/multiple_route/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/thedevsaddam/multiple_route.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/thedevsaddam/multiple_route.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/thedevsaddam/multiple_route.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/thedevsaddam/multiple_route
[link-travis]: https://travis-ci.org/thedevsaddam/multiple_route
[link-scrutinizer]: https://scrutinizer-ci.com/g/thedevsaddam/multiple_route/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/thedevsaddam/multiple_route
[link-downloads]: https://packagist.org/packages/thedevsaddam/multiple_route
[link-author]: https://github.com/thedevsaddam
[link-contributors]: ../../contributors
