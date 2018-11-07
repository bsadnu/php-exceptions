<?php

namespace Bsadnu\Exception;

use InvalidArgumentException as StandardInvalidArgumentException;

/**
 * Class InvalidArgumentException. This exception is thrown if an argument is not of the expected type.
 *
 * @package Bsadnu\Exception
 */
class InvalidArgumentException extends StandardInvalidArgumentException implements ExceptionInterface
{
	use UnitExceptionTrait;
}
