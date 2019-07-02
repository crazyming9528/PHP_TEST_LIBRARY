<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/29
 * Time: 10:37
 */

namespace  Adapter;

interface IDatabase{
    function connect($host,$user,$password,$dbname);
    function query($sql);
    function close();
}
