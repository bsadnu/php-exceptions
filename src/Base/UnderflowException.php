<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseInterface;

/**
 * Class UnderflowException. This exception is thrown when performing
 * an invalid operation on an empty container, such as removing an element.
 *
 * @package Bsadnu\Exception
 */
class UnderflowException extends \UnderflowException implements BaseInterface
{
}
