<?php

namespace shekibquraishy\LaraExample\Commands;

use Illuminate\Console\Command;

class LaraExampleCommand extends Command
{
    public $signature = 'lara-example';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
