<?php

namespace JoliCode\PhpOsHelper;

class GetResult {

  public static function ArrayReturn() {
    return $method_results = [
      "isUnix()" => \JoliCode\PhpOsHelper\OsHelper::isUnix(),
      "isWindowsSubsystemForLinux()" => \JoliCode\PhpOsHelper\OsHelper::isWindowsSubsystemForLinux(),
      "isWindows()" => \JoliCode\PhpOsHelper\OsHelper::isWindows(),
      "isWindowsSeven()" => \JoliCode\PhpOsHelper\OsHelper::isWindowsSeven(),
      "isWindowsEightOrHigher()" => \JoliCode\PhpOsHelper\OsHelper::isWindowsEightOrHigher(),
      "isMacOS()" => \JoliCode\PhpOsHelper\OsHelper::isMacOS(),  
    ];
  }
}