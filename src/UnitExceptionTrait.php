<?php

namespace Bsadnu\Exception;

/**
 * Trait UnitExceptionTrait. This trait adds unit-specific information to the exceptions if available.
 *
 * @package Bsadnu\Exception
 */
trait UnitExceptionTrait
{
    /**
     * The name of the unit that has thrown the exception.
     *
     * @var string
     */
    protected $unit;

    /**
     * Set the name of the unit that has thrown the exception.
     *
     * @param string $unit Name of the unit that has thrown the exception.
     */
    public function setUnit(string $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * Get the name of the unit that has thrown the exception.
     *
     * @return string Name of the unit that has thrown the exception.
     */
    public function getUnit(): string
    {
        return (string) $this->unit;
    }
}
