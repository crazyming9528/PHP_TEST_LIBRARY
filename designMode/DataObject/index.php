<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/29
 * Time: 10:07
 */
namespace DataObject;
require 'User.php';

$user = new User(1);
//$user->phone ="18581520828";
//$user->name ="crazyming";

var_dump($user->name,$user->phone);

//修改数据
$user->name="crazyming1995";