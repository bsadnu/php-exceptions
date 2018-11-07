<?php

namespace Bsadnu\Exception;

use BadFunctionCallException as StandardBadFunctionCallException;

/**
 * Class BadFunctionCallException. This exception is thrown if a callback refers to
 * an undefined function or if some arguments are missing.
 *
 * @package Bsadnu\Exception
 */
class BadFunctionCallException extends StandardBadFunctionCallException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
