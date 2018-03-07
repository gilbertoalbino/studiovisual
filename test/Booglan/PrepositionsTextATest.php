<?php

namespace Booglan;

use PHPUnit\Framework\TestCase;

class PrepositionsTextATest extends TestCase
{
    public $lexicalObj;

    public function setUp()
    {
        $this->lexicalObj = new Lexical();
        $this->lexicalObj->setText(file_get_contents(__DIR__ . '/../../data/A-Texto.txt'));
    }

    /**
     * Test if the answer is correct by getting all prepositions count.
     */
    public function testPrepositionsTotal()
    {
        $this->assertEquals(49, $this->lexicalObj->countPrepositions());
    }
}
