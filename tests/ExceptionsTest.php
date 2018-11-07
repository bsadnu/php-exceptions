<?php

namespace Bsadnu\Exception;

use PHPUnit\Framework\TestCase;

/**
 * Class ExceptionsTest
 *
 * @package Bsadnu\Exception
 */
class ExceptionsTest extends TestCase
{
    /**
     * Test creation of Exceptions.
     * The nesting structure that tries to catch
     * exceptions at all levels and builds an array with the names of the
     * exceptions it caught.
     *
     * @covers \Bsadnu\Exception\UnitExceptionTrait::__construct
     * @dataProvider exceptionsCreationDataProvider
     *
     * @param string $unitName Name of the unit to pass into the exception.
     * @param string $createClass Exception class to create.
     * @param array  $expectedToCatch Array of exceptions that were caught.
     */
    public function testExceptionsCreation(string $unitName, string $createClass, array $expectedToCatch): void
    {
        $caught = [];

        try {
            try {
                try {
                    try {
                        try {
                            $exception = new $createClass();
                            /** @var \Bsadnu\Exception\ExceptionInterface $exception */
                            $exception->setUnit($unitName);
                            throw $exception;
                        } catch (BadFunctionCallException $exception) {
                            $caught[] = BadFunctionCallException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (BadMethodCallException $exception) {
                            $caught[] = BadMethodCallException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (DomainException $exception) {
                            $caught[] = DomainException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (InvalidArgumentException $exception) {
                            $caught[] = InvalidArgumentException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (LengthException $exception) {
                            $caught[] = LengthException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (LogicException $exception) {
                            $caught[] = LogicException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (OutOfBoundsException $exception) {
                            $caught[] = OutOfBoundsException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (OutOfRangeException $exception) {
                            $caught[] = OutOfRangeException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (OverflowException $exception) {
                            $caught[] = OverflowException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (RangeException $exception) {
                            $caught[] = RangeException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (RuntimeException $exception) {
                            $caught[] = RuntimeException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (TypeError $exception) {
                            $caught[] = TypeError::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (UnderflowException $exception) {
                            $caught[] = UnderflowException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        } catch (UnexpectedValueException $exception) {
                            $caught[] = UnexpectedValueException::class;
                            $this->assertEquals(
                                $unitName,
                                $exception->getUnit()
                            );
                            throw $exception;
                        }
                    } catch (ExceptionInterface $exception) {
                        $caught[] = ExceptionInterface::class;
                        $this->assertEquals(
                            $unitName,
                            $exception->getUnit()
                        );
                        throw $exception;
                    }
                } catch (\BadMethodCallException $exception) {
                    $caught[] = \BadMethodCallException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\BadFunctionCallException $exception) {
                    $caught[] = \BadFunctionCallException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\DomainException $exception) {
                    $caught[] = \DomainException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\InvalidArgumentException $exception) {
                    $caught[] = \InvalidArgumentException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\LengthException $exception) {
                    $caught[] = \LengthException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\OutOfBoundsException $exception) {
                    $caught[] = \OutOfBoundsException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\OutOfRangeException $exception) {
                    $caught[] = \OutOfRangeException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\OverflowException $exception) {
                    $caught[] = \OverflowException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\RangeException $exception) {
                    $caught[] = \RangeException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\UnderflowException $exception) {
                    $caught[] = \UnderflowException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                } catch (\UnexpectedValueException $exception) {
                    $caught[] = \UnexpectedValueException::class;
                    $this->assertEquals(
                        $unitName,
                        $exception->getUnit()
                    );
                    throw $exception;
                }
            } catch (\LogicException $exception) {
                $caught[] = \LogicException::class;
                $this->assertEquals($unitName, $exception->getUnit());
                throw $exception;
            } catch (\RuntimeException $exception) {
                $caught[] = \RuntimeException::class;
                $this->assertEquals($unitName, $exception->getUnit());
                throw $exception;
            }
        } catch (\Exception $exception) {
            $caught[] = \Exception::class;
            $this->assertEquals($unitName, $exception->getUnit());
        } catch (\TypeError $exception) {
            $caught[] = \TypeError::class;
            $this->assertEquals($unitName, $exception->getUnit());
        }
        $this->assertEquals($expectedToCatch, $caught);
    }

    /**
     * Provide testable data to the testFeatureSupport() method.
     *
     * @return array
     */
    public function exceptionsCreationDataProvider(): array
    {
        return [
            [
                'BadFunctionCallException Test Unit',
                BadFunctionCallException::class,
                [
                    BadFunctionCallException::class,
                    ExceptionInterface::class,
                    \BadFunctionCallException::class,
                    \LogicException::class,
                    \Exception::class,
                ],
            ],
            [
                'BadMethodCallException Test Unit',
                BadMethodCallException::class,
                [
                    BadMethodCallException::class,
                    ExceptionInterface::class,
                    \BadMethodCallException::class,
                    \LogicException::class,
                    \Exception::class,
                ],
            ],
            [
                'DomainException Test Unit',
                DomainException::class,
                [
                    DomainException::class,
                    ExceptionInterface::class,
                    \DomainException::class,
                    \LogicException::class,
                    \Exception::class,
                ],
            ],
            [
                'InvalidArgumentException Test Unit',
                InvalidArgumentException::class,
                [
                    InvalidArgumentException::class,
                    ExceptionInterface::class,
                    \InvalidArgumentException::class,
                    \LogicException::class,
                    \Exception::class,
                ],
            ],
            [
                'LengthException Test Unit',
                LengthException::class,
                [
                    LengthException::class,
                    ExceptionInterface::class,
                    \LengthException::class,
                    \LogicException::class,
                    \Exception::class,
                ],
            ],
            [
                'LogicException Test Unit',
                LogicException::class,
                [
                    LogicException::class,
                    ExceptionInterface::class,
                    \LogicException::class,
                    \Exception::class,
                ],
            ],
            [
                'OutOfBoundsException Test Unit',
                OutOfBoundsException::class,
                [
                    OutOfBoundsException::class,
                    ExceptionInterface::class,
                    \OutOfBoundsException::class,
                    \RuntimeException::class,
                    \Exception::class,
                ],
            ],
            [
                'OutOfRangeException Test Unit',
                OutOfRangeException::class,
                [
                    OutOfRangeException::class,
                    ExceptionInterface::class,
                    \OutOfRangeException::class,
                    \LogicException::class,
                    \Exception::class,
                ],
            ],
            [
                'OverflowException Test Unit',
                OverflowException::class,
                [
                    OverflowException::class,
                    ExceptionInterface::class,
                    \OverflowException::class,
                    \RuntimeException::class,
                    \Exception::class,
                ],
            ],
            [
                'RangeException Test Unit',
                RangeException::class,
                [
                    RangeException::class,
                    ExceptionInterface::class,
                    \RangeException::class,
                    \RuntimeException::class,
                    \Exception::class,
                ],
            ],
            [
                'RuntimeException Test Unit',
                RuntimeException::class,
                [
                    RuntimeException::class,
                    ExceptionInterface::class,
                    \RuntimeException::class,
                    \Exception::class,
                ],
            ],
            [
                'UnderflowException Test Unit',
                UnderflowException::class,
                [
                    UnderflowException::class,
                    ExceptionInterface::class,
                    \UnderflowException::class,
                    \RuntimeException::class,
                    \Exception::class,
                ],
            ],
            [
                'UnexpectedValueException Test Unit',
                UnexpectedValueException::class,
                [
                    UnexpectedValueException::class,
                    ExceptionInterface::class,
                    \UnexpectedValueException::class,
                    \RuntimeException::class,
                    \Exception::class,
                ],
            ],
        ];
    }

    /**
     * Test setting the unit name from a Bsadnu exception.
     *
     * @covers \Bsadnu\Exception\UnitExceptionTrait::getUnit
     * @covers \Bsadnu\Exception\UnitExceptionTrait::setUnit
     */
    public function testSetUnit(): void
    {
        try {
            $exception = new RuntimeException(
                '',
                0,
                null
            );
            $exception->setUnit('a_unit_name');
            throw $exception;
        } catch (\Exception $exception) {
            /** @var \Bsadnu\Exception\ExceptionInterface $exception */
            $this->assertEquals(
                'a_unit_name',
                $exception->getUnit()
            );
        }
    }
}
