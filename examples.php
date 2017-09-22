<?php
/**
 * @global array $names - A list of test names to use.
 */
require_once('tests/bootstrap.php');

// Pull the parser into scope.
use joshfraser\FullNameParser;


/**
 * Run test on an array of names.
 *
 * @param array $names
 *
 * @return array
 */
function testNames($names)
{
    $parser = new FullNameParser();

    $results = array();
    foreach ($names as $name => $expected_values) {
        $results[$name] = array();
        $results[$name]['split'] = $parser->parse_name($name);
        $results[$name]['expected'] = $expected_values;
        $results[$name]['passed'] = testExpected($expected_values, $results[$name]['split']);
    }

    return $results;
}

$headers = array("salutation", "fname", "initials", "lname", "suffix", "nickname");
$results = testNames($names);

include('assets/examples.phtml');
