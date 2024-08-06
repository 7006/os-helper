<?php

require_once __DIR__ . '/vendor/autoload.php';

//Use static methods in class OsHelper
$methods_result_array = \JoliCode\PhpOsHelper\GetResult::ArrayReturn();
\JoliCode\PhpOsHelper\Table::render($methods_result_array);

echo "<br><br>";

//Use nontatic methods in class Os
$os = new \JoliCode\PhpOsHelper\Os();
$methods_result_array = \JoliCode\PhpOsHelper\GetResult::MyArrayReturn($os);
\JoliCode\PhpOsHelper\Table::render($methods_result_array);

