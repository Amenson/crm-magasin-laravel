<?php

namespace App\Console;

use Illuminate\Console\Command;

class ArtisanCommand extends Command
{
    protected $signature = 'custom:command';
    protected $description = 'Description of your command';

    public function handle()
    {
        $this->info('Artisan command executed successfully!');
    }
}
