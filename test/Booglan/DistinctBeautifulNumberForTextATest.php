<?php

namespace Booglan;

use PHPUnit\Framework\TestCase;

class DistinctBeautifulNumberForTextATest extends TestCase
{
    public $numberOjb;

    public function setUp()
    {
        $this->numberOjb = new Number();
        $this->numberOjb->setText(file_get_contents(__DIR__ . '/../../data/A-Texto.txt'));
    }

    /**
     * Test if the answer is correct by getting all distinct beautiful numbers.
     */
    public function testDistinctBeatifulNumbersTotal()
    {
        $this->assertEquals(140, $this->numberOjb->count());
    }
}
