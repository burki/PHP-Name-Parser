<?php

require_once(__DIR__ . '/vendor/autoload.php');

use joshfraser\Unit\Providers\ExampleResultsProvider;

// Headers for HTML table.
$headers = array("salutation", "fname", "initials", "lname", "suffix", "nickname");
$results = ExampleResultsProvider::getResults();

// Render variables into template.
include(__DIR__ . '/assets/examples.phtml');
