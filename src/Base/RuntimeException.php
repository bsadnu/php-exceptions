<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseExceptionInterface;

/**
 * This exception is thrown if an error which can only be found on runtime occurs.
 *
 * @package Bsadnu\Exception
 */
class RuntimeException extends \RuntimeException implements BaseExceptionInterface
{
}
