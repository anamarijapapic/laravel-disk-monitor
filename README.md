# Monitor metrics of Laravel disks.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/anamarijapapic/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/anamarijapapic/laravel-disk-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/anamarijapapic/laravel-disk-monitor/run-tests.yml?branch=master&label=tests&style=flat-square)](https://github.com/anamarijapapic/laravel-disk-monitor/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/anamarijapapic/laravel-disk-monitor/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/anamarijapapic/laravel-disk-monitor/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/anamarijapapic/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/anamarijapapic/laravel-disk-monitor)

Monitor metrics of Laravel disks.  
*([Spatie Laravel Package Training v2.0](https://laravelpackage.training/) - Creating a Laravel package)*

## Installation

You can install the package via composer:

```bash
composer require anamarijapapic/laravel-disk-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="disk-monitor-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="disk-monitor-config"
```

This is the contents of the published config file:

```php
return [
    /**
     * The names of the disks you want to monitor.
     */
    'disk_names' => [
        'local',
    ],
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="disk-monitor-views"
```

## Usage

```bash
php artisan disk-monitor:record-metrics
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Anamarija Papić](https://github.com/anamarijapapic)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
