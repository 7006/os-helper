<?php

require_once __DIR__ . '/vendor/autoload.php';

$arr =\JoliCode\PhpOsHelper\GetResult::ArrayReturn();
\JoliCode\PhpOsHelper\DrawTable::DrawTable($arr);