<?php

declare(strict_types=1);

use LeadGenerator\Generator;
use LeadGenerator\Lead;

require __DIR__ . '/../vendor/autoload.php';

$generator = new Generator();

$generator->generateLeads(10000, function (Lead $lead) {
    shell_exec('php src/Leads/Console/CreateLead.php ' . $lead->id . ' "' . $lead->categoryName . '"');
});
