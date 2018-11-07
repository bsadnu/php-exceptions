<?php

namespace Bsadnu\Exception;

/**
 * Interface ExceptionInterface. The base exception interface.
 *
 * @package Bsadnu\Exception
 */
interface ExceptionInterface
{
    /**
     * Get the name of the unit that has thrown the exception.
     *
     * @return string Name of the unit that has thrown the exception.
     */
    public function getUnit(): string;

    /**
     * Set the name of the unit that has thrown the exception.
     *
     * @param string $unit Name of the unit that has thrown the exception.
     */
    public function setUnit(string $unit): void;
}
