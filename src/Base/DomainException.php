<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseInterface;

/**
 * Class DomainException. This exception is thrown if a value
 * does not adhere to a defined valid data domain.
 *
 * @package Bsadnu\Exception
 */
class DomainException extends \DomainException implements BaseInterface
{
}
