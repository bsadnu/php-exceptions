<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseExceptionInterface;

/**
 * This exception is thrown when an illegal index was requested.
 * This represents errors that should be detected at compile time.
 *
 * @package Bsadnu\Exception
 */
class OutOfRangeException extends \OutOfRangeException implements BaseExceptionInterface
{
}
