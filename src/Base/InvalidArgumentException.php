<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseExceptionInterface;

/**
 * This exception is thrown if an argument is not of the expected type.
 *
 * @package Bsadnu\Exception
 */
class InvalidArgumentException extends \InvalidArgumentException implements BaseExceptionInterface
{
}
