<?php
class Scanner extends InputDevice {
    private int $scanSpeed;
    private static bool $isPowered = false;

    public function __construct(string $title, string $inventNumber, int $scanSpeed) {
        parent::__construct($title, $inventNumber);
        $this->scanSpeed = $scanSpeed;
    }

    public function getScanSpeed(): int { return $this->scanSpeed; }

    public function setScanSpeed(int $scanSpeed): void { $this->scanSpeed = $scanSpeed; }

    public static function getIsPowered(): bool {
        return self::$isPowered;
    }

    public static function setIsPowered($isPowered): void {
        self::$isPowered = $isPowered;
    }

    public function getScanTime(int $pages): string {
        return "You need " . round($pages / $this->scanSpeed) . " minutes to scan " . $pages . " pages\n";
    }

    public function __toString(): string {
        return parent::__toString()
            . "Scanning speed: " . $this->scanSpeed . " ppm\n";
    }
}