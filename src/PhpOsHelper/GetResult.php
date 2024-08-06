<?php

namespace JoliCode\PhpOsHelper;

class GetResult {

  public static function ArrayReturn() {
    return $method_results = [
      "Unix" => OsHelper::isUnix(),
      "Windows Subsystem For Linux" => OsHelper::isWindowsSubsystemForLinux(),
      "Windows" => OsHelper::isWindows(),
      "Windows 7" => OsHelper::isWindowsSeven(),
      "Windows 8 or higher" => OsHelper::isWindowsEightOrHigher(),
      "Mac OS" => OsHelper::isMacOS(),  
    ];
  }

  public function MyArrayReturn($obj) {
    return $method_results = [
      "isUnix()" => OsHelper::isUnix(),
      "isWindowsSubsystemForLinux()" => OsHelper::isWindowsSubsystemForLinux(),
      "isWindows()" => OsHelper::isWindows(),
      "isWindowsSeven()" => OsHelper::isWindowsSeven(),
      "isWindowsEightOrHigher()" => OsHelper::isWindowsEightOrHigher(),
      "isMacOS()" => OsHelper::isMacOS(),  
    ];
  }
}