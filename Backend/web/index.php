<?php
//require '../Src/Bootstrap/Classes/Autoloader.php';
require '../../vendor/autoload.php';

//    $loader = new \Backend\Src\Bootstrap\Classes\Autoloader();
//    $loader->addNamespace('Foo\Bar','/Backend/Src/Bootstrap/Classes');
//    $loader->register();

//    var_dump(new \Foo\Bar\Request());
spl_autoload_register('AutoLoader');

function AutoLoader($className)
{
    $file = str_replace('\\',DIRECTORY_SEPARATOR,$className);
//    var_dump($file);
    require_once "../../$file.php";
    //Make your own path, Might need to use Magics like ___DIR___
//    EXIT;
}

new \Backend\Src\Bootstrap\Classes\Autoloader();
//phpinfo();