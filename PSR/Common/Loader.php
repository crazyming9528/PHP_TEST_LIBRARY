<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/26
 * Time: 17:19
 */

namespace Common;


class Loader
{
    static public function autoload($class){
        require BASEDIR.'/'.str_replace('\\','/',$class).".php";
    }

}