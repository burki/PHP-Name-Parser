<?php

require_once(__DIR__ . '/vendor/autoload.php');

use joshfraser\Unit\TestHelper;
use joshfraser\Unit\NamesProvider;

$headers = array("salutation", "fname", "initials", "lname", "suffix", "nickname");
$results = TestHelper::getExampleResults(NamesProvider::getNames());

// Render variables into template.
include(__DIR__ . '/assets/examples.phtml');
