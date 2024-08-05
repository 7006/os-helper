<?php

require_once __DIR__ . '/vendor/autoload.php';

$methods_result_array = \JoliCode\PhpOsHelper\GetResult::ArrayReturn();
\JoliCode\PhpOsHelper\DrawTable::DrawTable($methods_result_array);