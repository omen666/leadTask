<?php

declare(strict_types=1);

namespace App\Leads\Command\CreateLead;

final class Command
{
    public function __construct(
        public readonly string $id,
        public readonly string $categoryName,
    ) {
    }
}
