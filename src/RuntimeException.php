<?php

namespace Bsadnu\Exception;

use RuntimeException as StandardRuntimeException;

/**
 * Class RuntimeException. This exception is thrown if an error which can only be found on runtime occurs.
 *
 * @package Bsadnu\Exception
 */
class RuntimeException extends StandardRuntimeException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
