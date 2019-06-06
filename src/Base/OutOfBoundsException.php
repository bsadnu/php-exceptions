<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseExceptionInterface;

/**
 * This exception is thrown if a value is not a valid key.
 * This represents errors that cannot be detected at compile time.
 *
 * @package Bsadnu\Exception
 */
class OutOfBoundsException extends \OutOfBoundsException implements BaseExceptionInterface
{
}
