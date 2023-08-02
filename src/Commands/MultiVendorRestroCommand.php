<?php

namespace Chahal26\MultiVendorRestro\Commands;

use Illuminate\Console\Command;

class MultiVendorRestroCommand extends Command
{
    public $signature = 'multi-vendor-restro';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
