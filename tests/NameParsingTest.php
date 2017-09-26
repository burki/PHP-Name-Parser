<?php

use joshfraser\FullNameParser;
use joshfraser\Unit\FullNameParserTestCase;

/**
 * @class FullNameParserTest
 *
 * PHP unit testing for the FullNameParser class.
 */
class NameParsingTest extends FullNameParserTestCase
{
    /**
     * @var FullNameParser
     */
    protected static $parser = null;


    /**
     * Set up the parser.
     */
    public static function setUpBeforeClass()
    {
        self::$parser = new FullNameParser();
        parent::setUpBeforeClass();
    }

    /**
     * Unit test for names.
     *
     * @dataProvider joshfraser\Unit\Providers\NamesProvider::getUnitWorkingNames
     *
     * @param string $name
     * @param array $expected
     */
    public function testWorkingNames($name, $expected)
    {
        $parsed = self::$parser->parse_name($name);

        $this->assertParseMatches($parsed, $expected);
    }

    /**
     * Test known failing names.
     *
     * @dataProvider joshfraser\Unit\Providers\NamesProvider::getUnitFailingNames
     *
     * @param string $name
     * @param array $expected
     */
    public function testFailingNames($name, $expected)
    {
        $parsed = self::$parser->parse_name($name);

        $this->assertParseDoesNotMatch($parsed, $expected);
    }

    /**
     * Test known working professions.
     *
     * @dataProvider \joshfraser\Unit\Providers\SuffixProvider::getWorkingProfessions()
     *
     * @param string $name
     * @param array $expected
     *
     * @return void
     */
    public function testWorkingProfessions($name, $expected)
    {
        $parsed = self::$parser->get_pro_suffix($name);

        $this->assertParseMatches($parsed, $expected);
    }

    /**
     * Test known failing professions.
     *
     * @dataProvider \joshfraser\Unit\Providers\SuffixProvider::getFailingProfessions()
     *
     * @param string $name
     *
     * @return void
     */
    public function testFailingProfessions($name)
    {
        $parsed = self::$parser->get_pro_suffix($name);

        $this->assertEmpty($parsed);
    }
}
