<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseInterface;

/**
 * Class LogicException.
 * This exception is thrown to represent an error in the program logic.
 * This kind of exception should lead directly to a fix in your code.
 *
 * @package Bsadnu\Exception
 */
class LogicException extends \LogicException implements BaseInterface
{
}
