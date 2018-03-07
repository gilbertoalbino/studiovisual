<?php
/**
 * Teste de Nivelamento Studio Visual.
 *
 * @copyright Gilberto Albino
 */

namespace Booglan;

/**
 * Class Number is used to beautiful numbers from booglan.
 *
 * @package Booglan
 */
class Number
{

    /**
     * Inherits utilities for reading text files.
     */
    use SourceReaderTrait;

    /**
     * The booglan alphabet chars.
     *
     * @var string
     */
    private $alphabet;

    /**
     * Gets a list of booglan beautiful numbers.
     *
     * @return array
     */
    public function getBeautifulNumbers()
    {
        $this->alphabet = str_split(Alphabet::CHARS);

        $words = $this->getWords();
        $beautifulNumbers = [];

        for ($i = 0; $i < count($words); $i++) {

            $word = $words[$i];
            $baseNumber = $this->getBaseNumber($word);

            if ($this->isBeautiful($baseNumber)) {
                $beautifulNumbers[] = $baseNumber;
            }
        }

        return array_unique($beautifulNumbers);
    }

    /**
     * Checks if a number is a beautiful booglan number.
     *
     * @param $number   The number to me checked.
     * @return bool
     */
    public function isBeautiful($number)
    {
        return ($number == 422224 || bccomp($number, 422224) > -1 && $number % 3 == 0);
    }

    /**
     * Gets a list of words form a booglan text.
     *
     * @return array
     */
    public function getWords()
    {
        preg_match_all(RegExp::WORDS_REGEX, $this->text, $words);
        return $words[0];
    }

    /**
     * Counts the found beautiful numbers.
     *
     * @return int
     */
    public function count()
    {
        return count($this->getBeautifulNumbers());
    }

    /**
     * Gets the base number of booglan math system.
     *
     * @param $word The word to be matched.
     * @return int
     */
    private function getBaseNumber($word)
    {
        $baseNumber = 0;

        for ($j = 0; $j < strlen($word); $j++) {
            $number = array_search($word{$j}, $this->alphabet);
            $baseNumber += bcmul(bcpow(20, $j), $number);
        }

        return $baseNumber;
    }
}
