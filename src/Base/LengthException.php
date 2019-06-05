<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseInterface;

/**
 * Class LengthException. This exception is thrown if a length is invalid.
 *
 * @package Bsadnu\Exception
 */
class LengthException extends \LengthException implements BaseInterface
{
}
