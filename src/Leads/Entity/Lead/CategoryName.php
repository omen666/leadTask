<?php

declare(strict_types=1);

namespace App\Leads\Entity\Lead;

use Stringable;
use Webmozart\Assert\Assert;

final class CategoryName implements Stringable
{
    public const AUTO           = 'Buy auto';
    public const HOUSE          = 'Buy house';
    public const LOAN           = 'Get loan';
    public const CLEANING       = 'Cleaning';
    public const CAR_WASH       = 'Car wash';
    public const REPAIR         = 'Repair smth';
    public const BARBERSHOP     = 'Barbershop';
    public const PIZZA          = 'Pizza';
    public const CAR_INSURANCE  = 'Car insurance';
    public const LIFE_INSURANCE = 'Life insurance';

    private string $value;

    public function __construct(string $value)
    {
        Assert::oneOf($value, [
            self::AUTO,
            self::HOUSE,
            self::LOAN,
            self::CLEANING,
            self::CAR_WASH,
            self::REPAIR,
            self::BARBERSHOP,
            self::PIZZA,
            self::CAR_INSURANCE,
            self::LIFE_INSURANCE,
        ]);
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }


    public function __toString(): string
    {
        return $this->getValue();
    }
}
