<?php

namespace Booglan;

use PHPUnit\Framework\TestCase;

class VerbsTextATest extends TestCase
{
    public $lexicalObj;

    public function setUp()
    {
        $this->lexicalObj = new Lexical();
        $this->lexicalObj->setText(file_get_contents(__DIR__ . '/../../data/A-Texto.txt'));
    }

    /**
     * Test if the answer is correct by getting all verbs count.
     */
    public function testVerbsTotal()
    {
        $this->assertEquals(71, $this->lexicalObj->countVerbs());
    }
}
