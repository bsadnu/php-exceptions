<?php

namespace Bsadnu\Exception;

use BadMethodCallException as StandardBadMethodCallException;

/**
 * Class BadMethodCallException. This exception is thrown if a callback refers to
 * an undefined method or if some arguments are missing.
 *
 * @package Bsadnu\Exception
 */
class BadMethodCallException extends StandardBadMethodCallException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
