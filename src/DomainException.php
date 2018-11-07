<?php

namespace Bsadnu\Exception;

use DomainException as StandardDomainException;

/**
 * Class DomainException. This exception is thrown if a value
 * does not adhere to a defined valid data domain.
 *
 * @package Bsadnu\Exception
 */
class DomainException extends StandardDomainException implements ExceptionInterface
{
    use UnitExceptionTrait;
}
