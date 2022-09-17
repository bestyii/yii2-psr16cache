# PSR-16 Cache for Yii2
[![Latest Version](https://img.shields.io/github/release/bestyii/yii2-psr16cache.svg?style=flat-square)](https://github.com/bestyii/yii2-psr16cache/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/bestyii/yii2-psr16cache.svg?style=flat-square)](https://scrutinizer-ci.com/g/bestyii/yii2-psr16cache/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/bestyii/yii2-psr16cache.svg?style=flat-square)](https://scrutinizer-ci.com/g/bestyii/yii2-psr16cache)
[![Total Downloads](https://img.shields.io/packagist/dt/bestyii/yii2-psr16cache.svg?style=flat-square)](https://packagist.org/packages/bestyii/yii2-psr16cache)

This package provides simple mechanism base PSR-16 Simple Cache for Yii2.

## Installation

To install, use composer:

```
composer require bestyii/yii2-psr16cache
```

## Testing

``` bash
$ ./vendor/bin/phpunit
```

## Usage
Define it as a component in your plugin
```php 
'components' => [
    'psr16cache' => [
        'class' => bestyii\psr16cache\SimpleCacheAdapter::class
     ]
]
```


## Credits

- [PSR-16 Cache for Craft CMS](https://github.com/flipboxfactory/craft-psr16)
- [devonliu02/psr16cache](https://github.com/devonliu02/yii2-simple-cache-adapter)

## License

The BSD 3-Clause License. Please see [License File](https://github.com/bestyii/yii2-psr16cache/blob/main/LICENSE) for more information.
