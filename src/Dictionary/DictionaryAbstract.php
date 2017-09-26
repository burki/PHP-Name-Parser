<?php

namespace joshfraser\Dictionary;

/**
 * Class DictionaryAbstract
 *
 * @package joshfraser\Dictionary
 *
 * The following properties are accessible via magic methods:
 * @property array $prefixes
 * @property array $lineages
 * @property array $professions
 * @property array $compound
 * @property array $vowels
 */
abstract class DictionaryAbstract
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
     * @var array $readable
     *   List of internal properties that can be seen externally via magic methods.
     */
    protected $readable = array(
        'prefixes',
        'lineages',
        'professions',
        'compound',
        'vowels',
    );
    /**
     * @var array - Dictionary prefixes, honorifics, and titles.
     */
    protected $prefixes = array();
    /**
     * @var array - List of lineage suffixes.
     */
    protected $lineages = array();
    /**
     * @var array - List of profession suffixes.
     */
    protected $professions = array();
    /**
     * @var array - List of possible compound names.
     */
    protected $compound = array();
    /**
     * @var array - Vowels of the language.
     */
    protected $vowels = array();

    /**
     * Get the language of this dictionary.
     *
     * @return string
     */
    public function getLanguage()
    {
        return mb_strtolower(static::LANGUAGE);
    }

    /**
     * Get the language code of this dictionary.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return mb_strtolower(static::CODE);
    }

    /**
     * Implements magic __get() method.
     *
     * @param string $name
     *
     * @return mixed|null
     *   Null is returned if the property being accessed is not listed within the
     *   $readable property.
     */
    public function __get($name)
    {
        return in_array($name, $this->readable)
            ? $this->{$name}
            : null;
    }

    /**
     * Implements magic __isset() method.
     *
     * @param string $name
     *
     * @return bool
     *   Returns true if the property being requested is listed in the $readable
     *   array.
     */
    public function __isset($name)
    {
        return in_array($name, $this->readable);
    }

    /**
     * Implements magic __unset() method.
     *
     * External changes are not allowed, so this method does nothing.
     *
     * @param string $name
     *
     * @return void
     */
    public function __unset($name) {}

    /**
     * Implements magic __set() method.
     *
     * External changes are not allowed, so this method does nothing.
     *
     * @param string $name
     * @param mixed $value
     *
     * @return void
     */
    public function __set($name, $value) {}
}
