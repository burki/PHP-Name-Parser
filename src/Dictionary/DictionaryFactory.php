<?php

namespace joshfraser\Dictionary;

use Prophecy\Exception\InvalidArgumentException;

/**
 * Class DictionaryFactory
 *
 * @package joshfraser\Dictionary
 */
class DictionaryFactory
{
    /**
     * @var DictionaryFactory - Singleton instance.
     */
    private static $singleton = null;

    /**
     * @var array - List of registered dictionaries.
     */
    private $dictionaries = array();


    /**
     * DictionaryFactory constructor.
     */
    private function __construct()
    {
        // Register the base dictionaries (we only have English at the moment).
        $this->register('joshfraser\\Dictionary\\English\\EnglishDictionary');
    }

    /**
     * Register a dictionary with the DictionaryFactory.
     *
     * @param string $dictionary
     *   Fully-resolved path to dictionary class.  The class must implement the
     *   DictionaryInterface interface.
     *
     * @return void
     */
    public function register($dictionary)
    {
        if (is_string($dictionary) && class_exists($dictionary)) {
            $instance = new $dictionary();
            if ($instance instanceof DictionaryInterface) {
                $code = strtolower($instance->getLanguageCode());
                if ( ! isset($this->dictionaries[$code])) {
                    $this->dictionaries[$code] = $dictionary;
                }
            } else {
                throw new InvalidArgumentException($dictionary . ' is not a valid dictionary class.');
            }
        }
    }

    /**
     * Attempt to get the base language from a language code.
     *
     * I.e. get "en" from "en-US".
     *
     * @param string $language_code
     *
     * @return string
     */
    public function getLanguage($language_code)
    {
        $language = explode('-', $language_code);

        return $language[0];
    }

    /**
     * Get a dictionary from a language code.
     *
     * @param string $language_code
     *   Language codes should be in the form of
     *
     * @return null|DictionaryInterface
     *   Null is returned when a dictionary could not be found.
     */
    public static function get($language_code)
    {
        $language_code = strtolower($language_code);
        $factory = self::getInstance();

        // Try to language code specific dictionary.
        if (isset($factory->dictionaries[$language_code])) {
            return new $factory->dictionaries[$language_code]();
        }
        // Otherwise, try to load a generic dictionary for the language.
        $language = $factory->getLanguage($language_code);
        if (isset($factory->dictionaries[$language])) {
            return new $factory->dictionaries[$language];
        }

        return null;
    }

    /**
     * Get singleton instance.
     *
     * @return DictionaryFactory
     */
    public static function getInstance()
    {
        if (self::$singleton === null) {
            self::$singleton = new self();
        }

        return self::$singleton;
    }
}
