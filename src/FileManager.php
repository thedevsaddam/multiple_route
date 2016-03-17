<?php
/**
 * Created by PhpStorm.
 * User: thedevsaddam
 * Date: 3/17/16
 * Time: 2:02 AM
 */

namespace thedevsaddam\multiple_route;


class FileManager
{

    public function makeDir($dir_name)
    {
        if (!is_dir($dir_name)) {
            return mkdir($dir_name, 0777, true);
        }

    }
    public function makeFile($file_name)
    {
        $file = fopen($file_name, "w");
        fwrite($file, '<?php //Created at: '. date('y-m-d H:i:s'));
        fclose($file);
    }

    private function addLine($file_name, $new_line)
    {
        $lines = array();
        foreach(file($file_name) as $line)
        {
            array_push($lines, $line);
            if("require app_path('Http/routes.php');" == trim($line))
            {
                array_push($lines, "\t\t\trequire app_path('Http/Routes/".trim($new_line)."');".PHP_EOL);
            }
        }
        file_put_contents($file_name, $lines);
    }

    public function registerRoute($file_name)
    {
        //write mechanism to wirte a new line in RouteServiceProvider.php
        //after the original registered route.
        $this->addLine('app/Providers/RouteServiceProvider.php', $file_name);
    }


    public function removeFile($file_name)
    {
        if(file_exists($file_name)){
            @chmod($file_name, 0777);
            @unlink($file_name);
        }
    }

    public function removeLine($line_remove)
    {
        $source_file_name = 'app/Providers/RouteServiceProvider.php';
        $line_remove = "require app_path('Http/Routes/".$line_remove.".php');";
        $contents = file_get_contents($source_file_name);
        $contents = str_replace($line_remove, '', $contents);
        file_put_contents($source_file_name, $contents);
    }
}