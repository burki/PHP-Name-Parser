<?php

namespace joshfraser\Unit\Providers;

/**
 * Class DictionaryProvider
 *
 * @package joshfraser\Unit\Providers
 */
class DictionaryProvider
{
    /**
     * @var array - List of dictionaries to test.
     *   Entries should be in the format of "Language" => array("Language", "lang-code").
     */
    protected $dictionaries = array(
        'English' => array('English', 'en')
    );

    /**
     * Provider for dictionary tests.
     *
     * @return array
     */
    public function getDictionaries()
    {
        return $this->dictionaries;
    }
}
