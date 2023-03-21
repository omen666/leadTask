<?php

declare(strict_types=1);

namespace App\Leads\Command\CreateLead;

use App\Leads\Entity\Lead\CategoryName;
use App\Leads\Entity\Lead\Lead;
use App\Leads\Entity\Lead\LeadRepository;
use DateTimeImmutable;

final class Handler
{
    public function __construct(private readonly LeadRepository $repository)
    {
    }

    public function handle(Command $command): void
    {
        sleep(2);
        $lead = new Lead((int)$command->id, new CategoryName($command->categoryName), new DateTimeImmutable());
        $this->repository->add($lead);
    }
}
