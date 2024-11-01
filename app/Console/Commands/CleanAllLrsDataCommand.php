<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Trax\XapiStore\Services\Cleaner\CleanerService;

class CleanAllLrsDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'eduplrs:clean-all-lrs-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command cleans all the data generated by users. It does not delete the data required to access the LRS.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(CleanerService $cleaner)
    {
        print("Cleaning...\n");
        $cleaner->clearAllStores(true);
        print("All done!\n");
        return 0;
    }
}
