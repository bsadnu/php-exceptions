<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseInterface;

/**
 * Class BadFunctionCallException. This exception is thrown if a callback refers to
 * an undefined function or if some arguments are missing.
 *
 * @package Bsadnu\Exception
 */
class BadFunctionCallException extends \BadFunctionCallException implements BaseInterface
{
}
