# A Laravel package for adding the environment to the HTML title

[![Latest Version on Packagist](https://img.shields.io/packagist/v/patrick-cullen/env-title.svg?style=flat-square)](https://packagist.org/packages/patrick-cullen/env-title)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/patrick-cullen/env-title/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/patrick-cullen/env-title/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/patrick-cullen/env-title/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/patrick-cullen/env-title/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/patrick-cullen/env-title.svg?style=flat-square)](https://packagist.org/packages/patrick-cullen/env-title)

Ever had local, QA, and production tabs of the same application all open at the same time? It can be easy to mix them up and waste precious time and attention keeping them straight.

This utility package creates a blade component that prepends the HTML title (what shows in a browser tab) with the environment that the application is running in- unless it's production, in which case nothing is shown.

<!-- ## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/env-title.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/env-title)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards). -->

## Installation

1. Add the following to the `composer.json` file at the root of your project:

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/patrick-cullen/env-title"
    }
]
```

Or add the inner object to your `repositories` array if one already exists.

You can install the package via composer:

```bash
composer require patrick-cullen/env-title
```

The installation script will handle the rest:

```bash
php artisan env-title:install
```

Now just replace your `<title>` tags with `<x-env-title>` blade components, and you're good to go.

<!--
You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="env-title-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="env-title-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="env-title-views"
``` -->

<!-- ## Usage

```php
$envTitle = new PatrickCullen\EnvTitle();
echo $envTitle->echoPhrase('Hello, PatrickCullen!');
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

Please review [our security policy](../../security/policy) on how to report security vulnerabilities. -->

## Credits

-   [patrick-cullen](https://github.com/patrick-cullen)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
