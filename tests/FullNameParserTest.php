<?php

use joshfraser\FullNameParser;
use joshfraser\Unit\TestHelper;
use PHPUnit\Framework\TestCase;

/**
 * @class FullNameParserTest
 *
 * PHP unit testing for the FullNameParser class.
 */
class FullNameParserTest extends TestCase
{
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
        $parser = new FullNameParser();
        TestHelper::assertMatchesActual($expected, $parser->parse_name($name));
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
        $parser = new FullNameParser();
        $matches = TestHelper::matchesActual($expected, $parser->parse_name($name));

        // These tests pass because the expected results do NOT match the actual results.
        $this->assertFalse($matches);
    }

    /**
     * Test pro suffix.
     */
    public function testProSuffix()
    {
        $parser = new FullNameParser();

        $tests = array(
            'Smarty Pants Phd' => 'Phd',
            'Smarty Pants PHD' => 'PHD',
            'OLD MACDONALD, PHD' => 'PHD',
        );

        $tests_no_match = array(
            'OLD MACDONALD',
            'OLD PHDMACDONALDPHD',
            'Prof. Ron Brown',
        );

        foreach ($tests as $test => $expected_result) {
            $suffixes = $parser->get_pro_suffix($test);
            $this->assertContains($expected_result, $suffixes);
        }

        foreach ($tests_no_match as $test) {
            $suffixes = $parser->get_pro_suffix($test);
            // Should get empty array
            $this->assertSame($suffixes, array());
        }
    }
}
