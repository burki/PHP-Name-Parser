<?php

namespace joshfraser\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Class ParserTestCase
 *
 * Provides some additional methods for helping test the results of the name parser.
 *
 * @package joshfraser\Unit
 */
class FullNameParserTestCase extends TestCase
{
    /**
     * Assert that a parsed result will not match an expected result.
     *
     * @param array $parsed
     * @param array $expected
     *
     * @throws \PHPUnit_Framework_ExpectationFailedException
     * @return void
     */
    public function assertParseDoesNotMatch(array $parsed, array $expected)
    {
        $this->assertNotSame($expected, $parsed, "Expected that parsed results would not match expected results.");
    }

    /**
     * Assert that a parsed result will match an expected result.
     *
     * @param array $parsed
     * @param array $expected
     *
     * @throws \PHPUnit_Framework_ExpectationFailedException
     * @return void
     */
    public function assertParseMatches(array $parsed, array $expected)
    {
        foreach ($expected as $key => $value) {
            $this->assertArrayHasKey($key, $parsed, "Expected index '{$key}' does not exist.");
            $this->assertEquals($value, $parsed[$key], "Expected value for '{$key}' does not match: got {$parsed[$key]}, but expected {$value}");
        }
    }
}
