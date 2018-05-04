<?php
    set_include_path('core');
    spl_autoload_extensions('.inc.php');
    spl_autoload_register();

    spl_autoload_register(function ($className){

        $arr = explode("_", $className);
        $folder = strtolower(array_shift($arr));
        $file = strtolower(array_shift($arr));

        $folders = array(

            0 => 'config',
            1 => 'moduls'

        );


        foreach ($folders as $val) {

            $path = ROOT . "/{$val}/{$folder}/{$file}.inc.php";

            if(file_exists($path)) {

                include $path;
                break;

            }

        }

    });