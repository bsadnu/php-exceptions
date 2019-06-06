<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseExceptionInterface;

/**
 * This exception is thrown if a length is invalid.
 *
 * @package Bsadnu\Exception
 */
class LengthException extends \LengthException implements BaseExceptionInterface
{
}
