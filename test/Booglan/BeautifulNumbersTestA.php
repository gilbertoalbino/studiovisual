<?php

namespace Booglan;

use PHPUnit\Framework\TestCase;

/**
 * Class BeautifulNumbersTestA will test the conciseness
 * of Booglan/NumberClass by matching Text A.
 *
 * @package Booglan
 */
class BeautifulNumbersTestA extends TestCase
{
    public $numberOjb;

    public function setUp()
    {
        $this->numberOjb = new Number();
        $this->numberOjb->setText(file_get_contents(__DIR__ . '/../../data/A-Texto.txt'));
    }

    /**
     * Test if the number is equal to 422224 and beautiful
     */
    public function testIsBeautifulNumberEqualTo()
    {
        $this->assertTrue($this->numberOjb->isBeautiful(422224));
    }

    /**
     * Test if the number is greater than 422224 and beautiful
     */
    public function testIsBeautifulNumberGreaterThan()
    {
        $this->assertTrue($this->numberOjb->isBeautiful(497667));
    }

    /**
     * Test if the number is divisable by 3 and beautiful
     */
    public function testIsBeautifulNumberDivisableBy()
    {
        $this->assertTrue($this->numberOjb->isBeautiful(19513390947));
    }
}
