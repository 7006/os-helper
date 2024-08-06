<?php

require_once __DIR__ . '/vendor/autoload.php';

use \JoliCode\PhpOsHelper\OsDetails;
use \JoliCode\PhpOsHelper\Table;
use \JoliCode\PhpOsHelper\Os;

$systemDetails = OsDetails::getSystemDetails();
Table::render($systemDetails);

$os = new Os();
$systemDetails = OsDetails::getSystemDetails2($os);
Table::render($systemDetails);

