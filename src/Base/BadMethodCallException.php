<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseExceptionInterface;

/**
 * This exception is thrown if a callback refers to
 * an undefined method or if some arguments are missing.
 *
 * @package Bsadnu\Exception
 */
class BadMethodCallException extends \BadMethodCallException implements BaseExceptionInterface
{
}
