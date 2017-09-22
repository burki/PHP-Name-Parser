<?php

namespace joshfraser\Unit;

use joshfraser\FullNameParser;

/**
 * @class TestHelper
 *
 * Contains methods to help with unit testing.
 *
 * @package joshfraser\Unit
 */
class TestHelper
{
    /**
     * Check if an expected array matches the actual results.
     *
     * @param array $expected
     * @param array $actual
     *
     * @throws \PHPUnit_Framework_ExpectationFailedException
     */
    public static function assertMatchesActual(array $expected, array $actual)
    {
        foreach ($expected as $key => $value) {
            if ( ! isset($actual[$key])) {
                throw new \PHPUnit_Framework_ExpectationFailedException("Expected index '{$key}' does not exist.");
            } elseif ($actual[$key] !== $value) {
                throw new \PHPUnit_Framework_ExpectationFailedException("Expected value for '{$key}' does not match: got {$actual[$key]}, but expected {$value}");
            }
        }
    }

    /**
     * Check if an expected result matches an actual result.
     *
     * @param array $expected
     * @param array $actual
     *
     * @return bool
     */
    public static function matchesActual(array $expected, array $actual)
    {
        try {
            self::assertMatchesActual($expected, $actual);
        } catch (\PHPUnit_Framework_ExpectationFailedException $exception) {
            return false;
        }

        return true;
    }

    /**
     * Helper method for generating results in the examples.php file.
     *
     * @param array $names
     *
     * @return array
     */
    public static function getExampleResults($names)
    {
        $parser = new FullNameParser();
        $results = array();
        foreach ($names as $name => $expected_values) {
            $results[$name] = array();
            $results[$name]['split'] = $parser->parse_name($name);
            $results[$name]['expected'] = $expected_values;
            $results[$name]['passed'] = self::matchesActual($expected_values, $results[$name]['split']);
        }

        return $results;
    }
}
