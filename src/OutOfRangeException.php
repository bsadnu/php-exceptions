<?php

namespace Bsadnu\Exception;

use OutOfRangeException as StandardOutOfRangeException;

/**
 * Class OutOfRangeException.
 * This exception is thrown when an illegal index was requested.
 * This represents errors that should be detected at compile time.
 *
 * @package Bsadnu\Exception
 */
class OutOfRangeException extends StandardOutOfRangeException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
