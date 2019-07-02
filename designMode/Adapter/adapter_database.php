<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/28
 * Time: 9:47
 */
namespace  Adapter;
require "IDatabase.php";
require 'Mysql.php';
require 'Mysqli.php';
require 'PDO.php';

$db = new Mysql();
$db->connect('localhost','root','root','tp');
$data = $db->query("select * from user");
var_dump(mysql_fetch_assoc($data));
$db->close();


$db1 = new Mysqli();
$db1->connect('localhost','root','root','tp');
$data = $db1->query("select * from user");
var_dump(mysqli_fetch_assoc($data));
$db1->close();

$db2 = new PDO();
$db2->connect('localhost','root','root','tp');

$data = $db2->query("select * from user");
$db2->close();