# socius-dto

Simple class for wrapping data with relations.

## Installation

You can install the package via composer:

```bash
composer require grixu/socius-dto
```

## Usage

```php
class YourDto extends \Grixu\SociusDto\SociusDto
{
    // go forward as with normal DTO from spatie/data-transfer-object
    public string $some;
}

// Let's create one DTO object
$dto = new YourDto([
    'some' => 'data',
    'relations' => [
        [
            'foreignModel' => ForeignModel::class,
            'relation' => 'relationName',
            'foreignField' => 'xl_id',
            'type' => BelongsTo::class,
            'foreignKeys' => 'id',
        ],
    ]);
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mateusz.gostanski@gmail.com instead of using the issue tracker.

## Credits

- [Mateusz Gostański](https://github.com/grixu)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
