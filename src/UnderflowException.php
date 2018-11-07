<?php

namespace Bsadnu\Exception;

use UnderflowException as StandardUnderflowException;

/**
 * Class UnderflowException. This exception is thrown when performing
 * an invalid operation on an empty container, such as removing an element.
 *
 * @package Bsadnu\Exception
 */
class UnderflowException extends StandardUnderflowException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
