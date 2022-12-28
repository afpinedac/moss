<?php

namespace MOSS\MOSS\Commands;

use Illuminate\Console\Command;

class MOSSCommand extends Command
{
    public $signature = 'moss';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
