# A short description of the hide cursor tile

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:vendor/:package_name/run-tests?label=tests)](https://github.com/:vendor/:package_name/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)

This tile can be used on [the Laravel Dashboard]https://docs.spatie.be/laravel-dashboard).

It hides the cursor after 10 seconds of inactivity.

## Installation

You can install the package via composer:

```bash
composer require enflow/laravel-dashboard-hide-cursor-tile
```

Add this to your app.css
```css
@import 'vendor/enflow/laravel-dashboard-hide-cursor-tile/resources/css/hide-cursor.css';
```

Add this to your app.js
```js
import 'vendor/enflow/laravel-dashboard-hide-cursor-tile/resources/js/hide-cursor.js';
```

## Usage

In your dashboard view you use the `livewire:hide-cursor` component.
The tile itself is hidden, so you can put it anywhere you want

```html
<x-dashboard>
    <livewire:hide-cursor position="e1:e1" />
</x-dashboard>
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
