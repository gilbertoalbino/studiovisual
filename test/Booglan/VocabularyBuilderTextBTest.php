<?php

namespace Booglan;

use PHPUnit\Framework\TestCase;

class VocabularyBuilderTextBTest extends TestCase
{
    public $listBuilderObj;

    public function setUp()
    {
        $this->listBuilderObj = new ListBuilder();
        $this->listBuilderObj->setText(file_get_contents(__DIR__ . '/../../data/B-Texto.txt'));
    }

    /**
     * Test if the list generated is equal to the provided one.
     */
    public function testListIsEqual()
    {
        $list = file_get_contents(__DIR__ . '/../../data/B-Lista.txt');
        $this->assertEquals($list, $this->listBuilderObj->generate());
    }
}
