Stringy Twig Filters for LaBlog
===============================

A simple plugin for Lablog (or twig stand-alone).

Navigation
----------
- [Installation](#installation)
- [Laravel & LaBlog Use](#laravel--lablog-usage)
- [Stand-Alone Twig Use](#using-with-stand-alone-twig)
- [Template Filter Use](#general-usage-in-templates)

Installation
------------

Installation is done via composer packages.

To install, simply add the following to your `composer.json` file.

```json
...
"require": {
    ...
    "lablog/stringy": "1.0.*"
    ...
}
...
```

Laravel & LaBlog Usage
----------------------

To use the stringy filters with Laravel 4 and LaBlog, just add the service provider to your `app/config/app.php` providers list.

*Note: The provider must be added _after_ the Laravel 4 Twig Bridge provider.*
*Note2: If you have LaBlog up and running, you will have already added the Twig Bridge provider.*

```php
...
    'Lablog\Stringy\StringyServiceProvider'
...
```

Using with Stand-alone Twig
---------------------------

To use the stringy filters with a stand-along, non-laravel bridged twig, just add the following to your twig extensions.

```php
'Lablog\Stringy\Twig\StringyLoader'
```

*Note: This has **not** been tested!*

General Usage in Templates
--------------------------

To use the stringy filters in a template, simply use the name of *any* of the stringy functions as a filter.

```php
<!-- Other Code -->
    <!-- Ensure the string has http:// to the left. -->
    {{ string | ensureLeft('http://') }}
    <!-- Output the 6th character of the string, starting from 0. -->
    {{ string | at(6) }}
<!-- Other Code -->
```

Please see the official [twig github page](https://github.com/danielstjules/Stringy) for a full list of functions.

