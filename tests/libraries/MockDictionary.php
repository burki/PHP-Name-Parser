<?php

namespace joshfraser\Unit;

use joshfraser\Dictionary\DictionaryAbstract;

/**
 * Class MockDictionary
 *
 * This is used in unit tests whenever mocking a dictionary might be useful.
 *
 * @package joshfraser\Unit
 */
class MockDictionary extends DictionaryAbstract
{
    const LANGUAGE = 'MockDictionary';
    const CODE = 'mock';
    public $prefixes = array();
    public $lineages = array();
    public $professions = array();
    public $vowels = array();
    public $compound = array();
}
