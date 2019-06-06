<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseExceptionInterface;

/**
 * This exception is thrown if a value does not match with a set of values.
 * Typically this happens when a function calls another function and expects
 * the return value to be of a certain type or value not including arithmetic
 * or buffer related errors.
 *
 * @package Bsadnu\Exception
 */
class UnexpectedValueException extends \UnexpectedValueException implements BaseExceptionInterface
{
}
