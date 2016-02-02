<?php
/**
 * Created by IntelliJ IDEA.
 * User: nick
 * Date: 31.01.16
 * Time: 18:25
 */

namespace Backend\Src\Bootstrap\Classes;

use Backend\Src\Traits\Singleton ;
/**
 * Class Request
 * @package Backend\Src\Bootstrap\Classes
 */
class Request {

    /**
     * @var
     */
    public static $request;

    public function getAll()
    {
        static::$request = array_merge(['METHOD'=>$_SERVER['REQUEST_METHOD']],["SERVER"=>$_SERVER?$_SERVER:[]],["COOKIE"=>$_COOKIE?$_COOKIE:[]],['SESSION']?$_SESSION:[]);

        try {
            switch($_SERVER['REQUEST_METHOD']) {
                case 'GET':
                    array_push(static::$request,["GET"=>$_GET?$_GET:[]]);
                    break;
                case 'POST':
                    !empty($_GET)?:array_push(static::$request,["GET"=>$_GET?$_GET:[]]);
                    !empty($_POST)?:array_push(static::$request,["POST"=>$_POST?$_POST:[]]);
                    break;
            }
        } catch (\Exception $e){
            //дописать логер
        }

        return static::$request;

    }
}