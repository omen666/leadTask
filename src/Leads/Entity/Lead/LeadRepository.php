<?php

declare(strict_types=1);

namespace App\Leads\Entity\Lead;

final class LeadRepository
{
    private string $logFilePath;

    public function __construct()
    {
        $this->logFilePath = __DIR__ . '/../../../../public/log.txt';
    }

    public function add(Lead $lead): void
    {
        file_put_contents($this->logFilePath, $lead . PHP_EOL, FILE_APPEND);
    }
}
