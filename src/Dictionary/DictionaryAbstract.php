<?php

namespace joshfraser\Dictionary;

abstract class DictionaryAbstract implements DictionaryInterface
{
    /**
     * @var string - Child classes should override this, for example "English".
     */
    const LANGUAGE = null;
    /**
     * @var string - Child classes should override this, for example "en-US".
     */
    const CODE = null;

    /**
     * @var array - Dictionary prefixes.
     */
    protected $prefixes = array();
    /**
     * @var array - Dictionary suffixes.
     */
    protected $suffixes = array();
    /**
     * @var array - Dictionary compound words.
     */
    protected $compound = array();
    /**
     * @var array - Dictionary vowels.
     */
    protected $vowels = array();

    /**
     * Get the language of this dictionary.
     *
     * @return string
     */
    public function getLanguage()
    {
        return strtolower(static::LANGUAGE);
    }

    /**
     * Get the language code of this dictionary.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return strtolower(static::CODE);
    }

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
    public function getPrefixes($search = null)
    {
        return $this->get('prefixes', $search);
    }

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
    public function getSuffixes($search = null)
    {
        return $this->get('suffixes', $search);
    }

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
    public function getCompound($search = null)
    {
        return $this->get('compound', $search);
    }

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
    public function getVowels($search = null)
    {
        return $this->get('vowels', $search);
    }

    /**
     * Get a variable from a source.
     *
     * @param string $from
     * @param string $search
     *
     * @return mixed
     */
    protected function get($from, $search = null)
    {
        $from = strtolower($from);
        if (isset($this->{$from}) && is_array($this->{$from})) {
            if ($search === null) {
                return $this->{$from};
            }

            return isset($this->{$from}[$search])
                ? $this->{$from}[$search]
                : null;
        }

        // Invalid source specified.
        return null;
    }
}
