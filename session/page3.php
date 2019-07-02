<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 14:33
 */
session_start();
//unset($_SESSION['name']);
session_destroy();//清除服务器上所有的session
header("Location: page2.php");
