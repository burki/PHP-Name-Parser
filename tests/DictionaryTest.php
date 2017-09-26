<?php

use joshfraser\Dictionary\DictionaryFactory;
use joshfraser\Dictionary\Exception\InvalidDictionaryException;
use PHPUnit\Framework\TestCase;

/**
 * Class DictionaryTest
 */
class DictionaryTest extends TestCase
{
    /**
     * Dictionaries test.
     *
     * @dataProvider \joshfraser\Unit\Providers\DictionaryProvider::getDictionaries()
     *
     * @param string $language
     *   A language, such as English.
     * @param string $code
     *   A code, such as en-US.
     */
    public function testDictionaries($language, $code)
    {
        $dictionary = DictionaryFactory::get($code);
        $this->assertEquals(mb_strtolower($language), $dictionary->getLanguage());
        $this->assertNotEmpty($dictionary->prefixes);
        $this->assertNotEmpty($dictionary->lineages);
        $this->assertNotEmpty($dictionary->compound);
        $this->assertNotEmpty($dictionary->professions);
        $this->assertNotEmpty($dictionary->vowels);
    }

    /**
     * Ensure that registering dictionaries works.
     */
    public function testRegisterDictionary()
    {
        $dictionary_class = 'joshfraser\\Unit\\MockDictionary';
        DictionaryFactory::getInstance()->register($dictionary_class);
        $dictionary = DictionaryFactory::get('mock');
        $this->assertInstanceOf($dictionary_class, $dictionary, 'Mock dictionary failed to register.');
    }

    /**
     * Ensure that invalid dictionaries cannot be registered.
     */
    public function testInvalidDictionaryClass()
    {
        $dictionary_class = 'InvalidClass';
        try {
            DictionaryFactory::getInstance()->register($dictionary_class);
        } catch (InvalidDictionaryException $e) {
            // We got an invalid dictionary exception as expected.
            $this->assertTrue(true);
            return;
        } catch (Exception $e) {
            // Something else threw an unexpected exception.
            $this->fail('Test case needed for: ' . $e->getMessage());
            return;
        }

        // We shouldn't get to this point.
        $this->fail('Invalid dictionary registered.');
    }
}
