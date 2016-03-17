<?php

namespace thedevsaddam\multiple_route\Console\Commands;

use Illuminate\Console\Command;
use thedevsaddam\multiple_route\FileManager;

class RemoveRouteCommand extends Command
{
    private $file;
    private $file_directory = 'app/Http/Routes/';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:remove {route_name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove route from your project';

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
        $this->removeRoute();
    }

    /**
     * @return bool
     */
    public function removeRoute()
    {
        if(empty($this->argument('route_name'))){
            $this->warn('Route file name is required!');
        }else{
            $file_name = strtolower($this->argument('route_name'));
            $this->file->removeLine($file_name);
            $this->warn('Route unregistered successfully!');
            if(file_exists($this->file_directory.$file_name.'.php')){
                $this->file->removeFile($this->file_directory.$file_name.'.php');
                $this->warn('Route removed successfully!');
            }
        }

    }

}
