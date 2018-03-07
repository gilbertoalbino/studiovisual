<?php
/**
 * Teste de Nivelamento Studio Visual.
 *
 * @copyright Gilberto Albino
 */

namespace Booglan;

/**
 * Class RegExp is used for sharing regular expressions.
 *
 * @package Booglan
 */
final class RegExp
{
    /**
     * Regex for matching words.
     */
    const WORDS_REGEX = '/\b([\w]{1,})\b/';

    /**
     * Regex for matching prepositions.
     */
    const PREPOSITIONS_REGEX = '/\b([^l ]{4,4})([^rtcdbl\s]{1,1})\b/';

    /**
     * Regex for matching verbs.
     */
    const VERBS_REGEX = '/\b([\w]{7,})([^rtcdb\s]{1,1})\b/';

    /**
     * Regex for matching verbs first person.
     */
    const FIRST_PERSON_VERBS_REGEX = '/\b([^rtcdb\s]{1,1}[\w]{6,})([^rtcdb\s]{1,1})\b/';
}