<?php
/**
 * Teste de Nivelamento Studio Visual.
 *
 * @copyright Gilberto Albino
 */

namespace Booglan;

/**
 * Class ListBuilder is used to generate a vocabulary.
 *
 * @package Booglan
 */
class ListBuilder
{

    /**
     * Inherits utilities for reading text files.
     */
    use SourceReaderTrait;

    /**
     * Generate a dictionary.
     *
     * @see ListBuilder::buildDictionary()
     * @return string
     */
    public function generate()
    {
        return join(' ', $this->buildDictionary());
    }

    /**
     * Build the dictionary itself.
     *
     * @return array
     */
    private function buildDictionary()
    {
        preg_match_all(RegExp::WORDS_REGEX, $this->getText(), $words);
        $words = array_unique($words[0]);
        return $this->sort($words);
    }

    /**
     * Sorts a given list of words by the given booglan chars order.
     *
     * @param $words    The words to be sorted.
     * @return array
     */
    private function sort($words)
    {
        $alphabet = str_split(Alphabet::CHARS);

        $dictionary = [];

        /**
         * It is necessary to cast every word
         * to an array in order to match its chars positions.
         */
        foreach ($words as $key => $word) {
            $dictionary[] = str_split($word);
        }

        $dictionarySize = count($dictionary);

        for ($i = 0; $i < $dictionarySize; $i++) {

            for ($j = 0; $j < ($dictionarySize - 1) - $i; $j++) {

                $current = $dictionary[$j];
                $next = $dictionary[$j + 1];

                $currentSize = count($current);
                $nextSize = count($next);

                $size = ($currentSize <= $nextSize) ? $currentSize : $nextSize;

                $odd = false;
                $even = false;

                for ($k = 0; $k < $size; $k++) {

                    $currentIndex = array_search($current[$k], $alphabet);
                    $nextIndex = array_search($next[$k], $alphabet);

                    if ($currentIndex < $nextIndex) {
                        $odd = false;
                        $even = false;
                        break;
                    }

                    if ($currentIndex == $nextIndex) {
                        $odd = false;
                        $even = true;
                        continue;
                    }

                    if ($currentIndex > $nextIndex) {
                        $odd = true;
                        $even = false;
                        break;
                    }
                }

                if ($odd || $even && count($current) > count($next)) {
                    $holder = $dictionary[$j];
                    $dictionary[$j] = $dictionary[$j + 1];
                    $dictionary[$j + 1] = $holder;
                }
            }
        }

        $sortedDictionary = [];

        /**
         * The dictionary is cast again to its original state but reordered.
         */
        foreach ($dictionary as $entry) {
            $sortedDictionary[] = join('', $entry);
        }

        return $sortedDictionary;
    }
}
