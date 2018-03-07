<?php

namespace Booglan;

use PHPUnit\Framework\TestCase;

class PrepositionsTextBTest extends TestCase
{
    public $lexicalObj;

    public function setUp()
    {
        $this->lexicalObj = new Lexical();
        $this->lexicalObj->setText(file_get_contents(__DIR__ . '/../../data/B-Texto.txt'));
    }

    /**
     * Test if the answer is correct by getting all prepositions count.
     */
    public function testPrepositionsTotal()
    {
        $this->assertEquals(67, $this->lexicalObj->countPrepositions());
    }
}
