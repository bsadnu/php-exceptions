<?php

namespace Bsadnu\Exception;

use OutOfBoundsException as StandardOutOfBoundsException;

/**
 * Class OutOfBoundsException.
 * This exception is thrown if a value is not a valid key.
 * This represents errors that cannot be detected at compile time.
 *
 * @package Bsadnu\Exception
 */
class OutOfBoundsException extends StandardOutOfBoundsException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
