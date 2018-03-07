<?php

namespace Booglan;

use PHPUnit\Framework\TestCase;

class VerbsFirstPersonTextATest extends TestCase
{
    public $lexicalObj;

    public function setUp()
    {
        $this->lexicalObj = new Lexical();
        $this->lexicalObj->setText(file_get_contents(__DIR__ . '/../../data/A-Texto.txt'));
    }

    /**
     * Test if the answer is correct by getting all verbs first person count.
     */
    public function testVerbsFirstPersonTotal()
    {
        $this->assertEquals(58, $this->lexicalObj->countVerbsFirstPerson());
    }
}
