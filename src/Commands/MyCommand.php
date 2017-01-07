<?php

namespace DemoPackage\Bleh\Commands;

use Illuminate\Console\Command;

class MyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:moduleContact';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $file = \Illuminate\Support\Facades\File::getRequire(base_path() . "/config/app.php");
        array_splice($file['providers'], 27, 0, "DemoPackage\Bleh\TestServiceProvider");
        $files = "<?php return " . var_export($file, true) . ";";
        \Illuminate\Support\Facades\File::put(base_path() . "/config/app.php", $files);
    }
}
