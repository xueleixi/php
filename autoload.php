<?php
/**
 * Created by PhpStorm.
 * User: xueleixi
 * Date: 2017/3/28
 * Time: 下午5:48
 */

function autoload($class){

    $dirFile=str_replace("\\","/",$class).".php";
    if (file_exists($dirFile)){
        require $dirFile;
        return;
    }


    $scan_dir=['class','models'];
    foreach ($scan_dir as $dir){
        $filename = "$dir/{$class}.php";
        if (is_file($filename)){
            require $filename;
            continue;
        }
    }
}

spl_autoload_register('autoload');