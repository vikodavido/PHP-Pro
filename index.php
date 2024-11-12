<?php

class ValueObject {
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(): int {
        return $this->red;
    }

    public function setRed(int $red): void {
        $this->validateColor($red);
        $this->red = $red;
    }

    public function getGreen(): int {
        return $this->green;
    }

    public function setGreen(int $green): void {
        $this->validateColor($green);
        $this->green = $green;
    }

    public function getBlue(): int {
        return $this->blue;
    }

    public function setBlue(int $blue): void {
        $this->validateColor($blue);
        $this->blue = $blue;
    }

    private function validateColor(int $color): void {
        if ($color < 0 || $color > 255) {
            throw new InvalidArgumentException("Invalid color value. Must be between 0 and 255.");
        }
    }

    public function equals(ValueObject $other): bool {
        return $this->red === $other->getRed() &&
               $this->green === $other->getGreen() &&
               $this->blue === $other->getBlue();
    }

    public static function random(): ValueObject {
        return new ValueObject(
            rand(0, 255),
            rand(0, 255),
            rand(0, 255)
        );
    }

    public function mix(ValueObject $other): ValueObject {
        $mixedRed = intdiv($this->red + $other->getRed(), 2);
        $mixedGreen = intdiv($this->green + $other->getGreen(), 2);
        $mixedBlue = intdiv($this->blue + $other->getBlue(), 2);

        return new ValueObject($mixedRed, $mixedGreen, $mixedBlue);
    }
}

try {
    $color1 = new ValueObject(120, 60, 200);
    $color2 = ValueObject::random();
    $mixedColor = $color1->mix($color2);

    echo "Color 1: ({$color1->getRed()}, {$color1->getGreen()}, {$color1->getBlue()})\n";
    echo "Color 2: ({$color2->getRed()}, {$color2->getGreen()}, {$color2->getBlue()})\n";
    echo "Mixed Color: ({$mixedColor->getRed()}, {$mixedColor->getGreen()}, {$mixedColor->getBlue()})\n";
    echo "Colors are equal: " . ($color1->equals($color2) ? 'Yes' : 'No') . "\n";
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
