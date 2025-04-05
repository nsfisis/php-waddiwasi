<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BitOps;

enum Signedness
{
    case Unsigned;
    case Signed;

    public static function fromSignBit(int $b): self
    {
        return $b === 0 ? self::Unsigned : self::Signed;
    }

    public function negated(): self
    {
        return match ($this) {
            self::Unsigned => self::Signed,
            self::Signed => self::Unsigned,
        };
    }
}
