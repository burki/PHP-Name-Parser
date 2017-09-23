<?php

namespace joshfraser\Dictionary;

/**
 * Interface DictionaryInterface
 *
 * @package joshfraser\Dictionary
 */
interface DictionaryInterface
{
    /**
     * Get the language of this dictionary.
     *
     * @return string
     */
    public function getLanguage();

    /**
     * Get the language code of this dictionary.
     *
     * @return string
     */
    public function getLanguageCode();

    /**
     * Get the prefixes of the dictionary or a specific prefix.
     *
     * @param string $search [optional]
     *   Search for a specific item and return that.
     *
     * @return array|string|null
     *   A string is returned if $search is specified and found.
     *   Null is returned if $search is specified, but not found.
     *   An array is returned if $search is not specified or null.
     */
    public function getPrefixes($search = null);

    /**
     * Get the suffixes of the dictionary or a specific suffix.
     *
     * @param string $search [optional]
     *   Search for a specific item and return that.
     *
     * @return array|string|null
     *   A string is returned if $search is specified and found.
     *   Null is returned if $search is specified, but not found.
     *   An array is returned if $search is not specified or null.
     */
    public function getSuffixes($search = null);

    /**
     * Get the compound words of the dictionary or a specific compound word.
     *
     * @param string $search [optional]
     *   Search for a specific item and return that.
     *
     * @return array|string|null
     *   A string is returned if $search is specified and found.
     *   Null is returned if $search is specified, but not found.
     *   An array is returned if $search is not specified or null.
     */
    public function getCompound($search = null);

    /**
     * Get the vowels of the dictionary or a specific vowel.
     *
     * @param string $search [optional]
     *   Search for a specific item and return that.
     *
     * @return array|string|null
     *   A string is returned if $search is specified and found.
     *   Null is returned if $search is specified, but not found.
     *   An array is returned if $search is not specified or null.
     */
    public function getVowels($search = null);
}
