<?php

declare(strict_types=1);

use App\Leads\Entity\Lead\LeadRepository;

require __DIR__ . '/../../../vendor/autoload.php';

$command = new App\Leads\Command\CreateLead\Command($argv[1], $argv[2]);

$handler = new App\Leads\Command\CreateLead\Handler(new LeadRepository());
try {
    $handler->handle($command);
} catch (\Webmozart\Assert\InvalidArgumentException $e) {
    //пишем в лог
}
