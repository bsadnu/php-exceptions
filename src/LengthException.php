<?php

namespace Bsadnu\Exception;

use LengthException as StandardLengthException;

/**
 * Class LengthException. This exception is thrown if a length is invalid.
 *
 * @package Bsadnu\Exception
 */
class LengthException extends StandardLengthException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
