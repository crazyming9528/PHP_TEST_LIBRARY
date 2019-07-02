<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 21:49
 */
$mysqli = new mysqli("localhost","root","root","php_test","3306");

if($mysqli->connect_errno){
    echo $mysqli->connect_errno;
    die($mysqli->connect_error);
}else{

    echo "数据库连接成功->";
   $result = $mysqli->query("INSERT INTO `user` VALUES(NULL,'php测试','18581528028','crazyming9528@qq.com','52013141')");

if($result){
    echo "插入成功->";
}else{
    echo "插入失败->";
}

    $mysqli->close();
}

