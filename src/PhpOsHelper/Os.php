<?php

namespace JoliCode\PhpOsHelper;

class Os
{
    private ?string $kernelName = NULL;
    private ?string $kernelVersion = NULL;
    private ?string $macOSVersion = NULL;

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
        if ($this->kernelVersion === NULL) {
            $this->kernelVersion = php_uname('r');
        }
        return '6.1' === $this->kernelVersion;
    }

    public function isWindowsEightOrHigher(): bool
    {
        if ($this->kernelVersion === NULL) {
            $this->kernelVersion = php_uname('r');
        }

        return version_compare($this->kernelVersion, '6.2', '>=');
    }

    public function isMacOS(): bool
    {
        if ($this->kernelName === NULL) {
            $this->kernelName = php_uname('s');
        }

        return str_contains($this->kernelName, 'Darwin');
    }
}