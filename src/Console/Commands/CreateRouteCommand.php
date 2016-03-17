<?php

namespace thedevsaddam\multiple_route\Console\Commands;

use Illuminate\Console\Command;
use thedevsaddam\multiple_route\FileManager;

class CreateRouteCommand extends Command
{
    private $file;
    private $file_directory = 'app/Http/Routes/';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:make {route_name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create multiple routes for your large project';

    public function __construct()
    {
        parent::__construct();
        $this->file = new FileManager();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->makeRoute();
    }

    /**
     * @return bool
     */
    public function makeRoute()
    {
        if(empty($this->argument('route_name'))){
            $this->warn('Route file name is required!');
            return false;
        }
        //make a directory for all routes
        //so that the all routes will go the the directory
        $this->file->makeDir($this->file_directory);

        $file_name = strtolower($this->argument('route_name')).'.php';
        if(file_exists($this->file_directory.$file_name)){
            $this->warn($file_name.' file already exist in app/Http directory!');
            return false;
        }else{
            $this->file->makeFile($this->file_directory.$file_name); //make the route file
            $this->file->registerRoute($file_name); //register the route file
            $this->info('Route file created at app/Http/Routes/'.$file_name);
        }

    }

}
