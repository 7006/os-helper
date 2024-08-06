<?php

namespace JoliCode\PhpOsHelper;

class GetResult {

  public function __constract() {
    
  }

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

  public static function MyArrayReturn($os) {
    return $method_results = [
      "Unix" => $os->isUnix(),
      "Windows Subsystem For Linux" => $os->isWindowsSubsystemForLinux(),
      "Windows" => $os->isWindows(),
      "Windows 7" => $os->isWindowsSeven(),
      "Windows 8 or higher" => $os->isWindowsEightOrHigher(),
      "Mac OS" => $os->isMacOS(),  
    ];
  }
}