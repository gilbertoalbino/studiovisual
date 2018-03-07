<?php

namespace Booglan;

use PHPUnit\Framework\TestCase;

class DistinctBeautifulNumberForTextBTest extends TestCase
{
    public $numberOjb;

    public function setUp()
    {
        $this->numberOjb = new Number();
        $this->numberOjb->setText(file_get_contents(__DIR__ . '/../../data/B-Texto.txt'));
    }

    /**
     * Test if the answer is correct by getting all distinct beautiful numbers.
     */
    public function testDistinctBeatifulNumbersTotal()
    {
        $this->assertEquals(142, $this->numberOjb->count());
    }
}
