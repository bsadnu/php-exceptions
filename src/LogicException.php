<?php

namespace Bsadnu\Exception;

use LogicException as StandardLogicException;

/**
 * Class LogicException.
 * This exception is thrown to represent an error in the program logic.
 * This kind of exception should lead directly to a fix in your code.
 *
 * @package Bsadnu\Exception
 */
class LogicException extends StandardLogicException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
