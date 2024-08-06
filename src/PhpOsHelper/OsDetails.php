<?php

namespace JoliCode\PhpOsHelper;

class OsDetails {

  public static function getSystemDetails() {
    return [
      "Unix" => OsHelper::isUnix(),
      "Windows Subsystem For Linux" => OsHelper::isWindowsSubsystemForLinux(),
      "Windows" => OsHelper::isWindows(),
      "Windows 7" => OsHelper::isWindowsSeven(),
      "Windows 8 or higher" => OsHelper::isWindowsEightOrHigher(),
      "Mac OS" => OsHelper::isMacOS(),  
    ];
  }

  public static function getSystemDetails2($os) {
    return [
      "Unix" => $os->isUnix(),
      "Windows Subsystem For Linux" => $os->isWindowsSubsystemForLinux(),
      "Windows" => $os->isWindows(),
      "Windows 7" => $os->isWindowsSeven(),
      "Windows 8 or higher" => $os->isWindowsEightOrHigher(),
      "Mac OS" => $os->isMacOS(),  
    ];
  }
}