<?php
/**
 * Teste de Nivelamento Studio Visual.
 *
 * @copyright Gilberto Albino
 */

namespace Booglan;

/**
 * Trait SourceReaderTrait helps to get source files.
 *
 * @package Booglan
 */
trait SourceReaderTrait
{
    /**
     * The sourced text.
     *
     * @var string
     */
    private $text;

    /**
     * Defines a source text to be parsed.
     *
     * @param string $text
     */
    public function setText($text = null)
    {
        $this->text = $text;
    }

    /**
     * Share a source text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
