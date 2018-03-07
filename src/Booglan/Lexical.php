<?php
/**
 * Teste de Nivelamento Studio Visual.
 *
 * @copyright Gilberto Albino
 */

namespace Booglan;

/**
 * Class Lexical is used to find Boolang dialects.
 * @package Booglan
 */
class Lexical
{

    /**
     * Inherits utilities for reading text files.
     */
    use SourceReaderTrait;

    /**
     * Parses the text by a regular expression to find prepositions.
     *
     * @see RegExp
     * @return array
     */
    public function findPrepositions()
    {
        preg_match_all(RegExp::PREPOSITIONS_REGEX, $this->getText(), $prepositions);
        return $prepositions[0];
    }

    /**
     * Parses the text by a regular expression to find verbs.
     *
     * @see RegExp
     * @return array
     */
    public function findVerbs()
    {
        preg_match_all(RegExp::VERBS_REGEX, $this->text, $verbs);
        return $verbs[0];
    }

    /**
     * Parses the text by a regular expression to find verbs first person.
     *
     * @see RegExp
     * @return array
     */
    public function findVerbsFirstPerson()
    {
        preg_match_all(RegExp::FIRST_PERSON_VERBS_REGEX, $this->getText(), $verbs);
        return $verbs[0];
    }

    /**
     * Counts the found prepositions.
     *
     * @return int
     */
    public function countPrepositions()
    {
        return count($this->findPrepositions());
    }

    /**
     * Counts the found verbs.
     *
     * @return int
     */
    public function countVerbs()
    {
        return count($this->findVerbs());
    }

    /**
     * Counts the found verbs first person.
     *
     * @return int
     */
    public function countVerbsFirstPerson()
    {
        return count($this->findVerbsFirstPerson());
    }
}
