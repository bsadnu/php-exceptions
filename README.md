# The helpful custom PHP exceptions

[![Latest Stable Version](https://poser.pugx.org/bsadnu/php-exceptions/v/stable)](https://packagist.org/packages/bsadnu/helpers-box) 
[![Total Downloads](https://poser.pugx.org/bsadnu/php-exceptions/downloads)](https://packagist.org/packages/bsadnu/helpers-box) 
[![License](https://poser.pugx.org/bsadnu/php-exceptions/license)](https://packagist.org/packages/bsadnu/helpers-box)

This lets you catch different-layers-specific exceptions (if needed).

## Installation

The best way to use this component is through the Composer:

```BASH
composer require bsadnu/php-exceptions
```

## Usage

- You may use exceptions within the standard throwing/catching mechanism or even extend them in any way you want:

```php
use Bsadnu\Exception\Base\InvalidArgumentException;

...

try {
    ...
} catch (InvalidArgumentException $exception) {
    ...
} 
```

```php
use Bsadnu\Exception\Base\TypeError;

...

throw new TypeError($message);
```

- It is really helpful to catch either the base `BaseExceptionInterface` or any other. Therefore, you can control a group of exceptions. Moreover, you may add manually as many specific interfaces as you wish. 

## More detailed description

All exceptions used in this library implements `\Bsadnu\Exception\Interfaces\BaseExceptionInterface`, and extend one of the SPL extensions. This way, you have several ways of catching specific extension groups:
1. Catch all exceptions: `\Exception`
2. Catch all exceptions thrown by the library:
`\Bsadnu\Exception\Interfaces\BaseExceptionInterface`
3. Catch a specific SPL exception: `\LogicException`
4. Catch a specific exception thrown by the library:
`\Bsadnu\Exception\Base\LogicException`

## Contributing

All feedback / bug reports / pull requests are welcome.

## License

This code is licensed under the [MIT License](LICENSE).
