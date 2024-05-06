<?php

namespace LaddaQ\LaddaQ\Commands;

use Illuminate\Console\Command;

class LaddaQCommand extends Command
{
    public $signature = 'laddaq-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
