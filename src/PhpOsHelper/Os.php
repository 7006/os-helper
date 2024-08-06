<?php

namespace JoliCode\PhpOsHelper;

class Os
{
    public string $kernelName;
    public string $kernelVersion;
    public string $macOSVersion;

    public function __construct() {
      $this->kernelName = php_uname('s');
      $this->kernelVersion = php_uname('r');
      $this->macOSVersion = php_uname('r');
    }

    public function isUnix(): bool
    {
        return '/' === \DIRECTORY_SEPARATOR;
    }

    public function isWindowsSubsystemForLinux(): bool
    {
        return $this->isUnix() && str_contains(strtolower(php_uname()), 'microsoft');
    }

    public function isWindows(): bool
    {
        return '\\' === \DIRECTORY_SEPARATOR;
    }

    public function isWindowsSeven(): bool
    {
        if (!isset($this->kernelVersion)) {
            $this->kernelVersion = php_uname('r');
        }

        return '6.1' === $this->kernelVersion;
    }

    public function isWindowsEightOrHigher(): bool
    {
        if (!isset($this->kernelVersion)) {
            $this->kernelVersion = php_uname('r');
        }

        return version_compare($this->kernelVersion, '6.2', '>=');
    }

    public function isMacOS(): bool
    {
        if (!isset($this->kernelName)) {
            $this->kernelName = php_uname('s');
        }

        return str_contains($this->kernelName, 'Darwin');
    }
}