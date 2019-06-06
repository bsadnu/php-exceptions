<?php

namespace Bsadnu\Exception\Base;

use Bsadnu\Exception\Interfaces\BaseExceptionInterface;

/**
 * This exception is thrown when adding an element to a full container.
 *
 * @package Bsadnu\Exception
 */
class OverflowException extends \OverflowException implements BaseExceptionInterface
{
}
