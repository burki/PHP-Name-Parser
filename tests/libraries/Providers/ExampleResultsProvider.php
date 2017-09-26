<?php

namespace joshfraser\Unit\Providers;

use joshfraser\FullNameParser;

/**
 * Class ExampleResultsProvider
 *
 * @package joshfraser\Unit\Providers
 */
class ExampleResultsProvider
{
    /**
     * @var FullNameParser
     */
    private $parser = null;

    /**
     * ExampleResultsProvider constructor.
     *
     * @param FullNameParser|null $parser [optional]
     */
    public function __construct(FullNameParser $parser = null)
    {
        $this->parser = $parser ?: new FullNameParser();
    }

    /**
     * Check if a parsed result matches an expected result.
     *
     * @param array $parsed
     * @param array $expected
     *
     * @return bool
     */
    protected function isMatch(array $parsed, array $expected)
    {
        foreach ($expected as $key => $value) {
            if ( ! isset($parsed[$key]) || $parsed[$key] !== $value) {
                return false;
            }
        }

        return true;
    }

    /**
     * Parse a name to get a result.
     *
     * @param string $name
     * @param array $expected
     *
     * @return array
     */
    protected function getResult($name, $expected)
    {
        $split = $this->parser->parse_name($name);
        $passed = $this->isMatch($split, $expected);

        return compact('split', 'passed', 'expected');
    }

    /**
     * Get example results.
     *
     * @return array
     */
    public static function getResults()
    {
        $self = new self();
        $results = array();
        foreach ((new NamesProvider)->getNames() as $name => $expected_values) {
            $results[$name] = $self->getResult($name, $expected_values);
        }

        return $results;
    }
}
