<?php

namespace Bsadnu\Exception;

use UnexpectedValueException as StandardUnexpectedValueException;

/**
 * Class UnexpectedValueException.
 * This exception is thrown if a value does not match with a set of values.
 * Typically this happens when a function calls another function and expects
 * the return value to be of a certain type or value not including arithmetic
 * or buffer related errors.
 *
 * @package Bsadnu\Exception
 */
class UnexpectedValueException extends StandardUnexpectedValueException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
