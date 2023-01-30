<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetupDev extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:dev';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup for dev environment';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call("cache:clear");
        $this->call("migrate:fresh");
    }
}
