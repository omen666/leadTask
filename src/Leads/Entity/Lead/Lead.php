<?php

declare(strict_types=1);

namespace App\Leads\Entity\Lead;

use DateTimeImmutable;
use Stringable;

final class Lead implements Stringable
{
    private int $id;

    private CategoryName $categoryName;

    private DateTimeImmutable $currentDatetime;

    public function __construct(
        int $id,
        CategoryName $categoryName,
        DateTimeImmutable $currentDatetime,
    ) {
        $this->id              = $id;
        $this->categoryName    = $categoryName;
        $this->currentDatetime = $currentDatetime;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCategoryName(): CategoryName
    {
        return $this->categoryName;
    }

    public function getCurrentDatetime(): DateTimeImmutable
    {
        return $this->currentDatetime;
    }

    public function __toString(): string
    {
        return $this->id . ' | ' . $this->categoryName . ' | ' . $this->currentDatetime->format('Y-m-d H:i:s');
    }
}
