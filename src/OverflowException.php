<?php

namespace Bsadnu\Exception;

use OverflowException as StandardOverflowException;

/**
 * Class OverflowException. This exception is thrown when adding an element to a full container.
 *
 * @package Bsadnu\Exception
 */
class OverflowException extends StandardOverflowException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
