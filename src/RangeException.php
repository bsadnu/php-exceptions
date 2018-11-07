<?php

namespace Bsadnu\Exception;

use RangeException as StandardRangeException;

/**
 * Class RangeException.
 * This exception is thrown to indicate range errors during program execution.
 * Normally this means there was an arithmetic error other than under/overflow.
 * This is the runtime version of DomainException.
 *
 * @package Bsadnu\Exception
 */
class RangeException extends StandardRangeException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
