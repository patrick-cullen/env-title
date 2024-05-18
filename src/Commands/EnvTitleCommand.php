<?php

namespace PatrickCullen\EnvTitle\Commands;

use Illuminate\Console\Command;

class EnvTitleCommand extends Command
{
    public $signature = 'env-title';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
