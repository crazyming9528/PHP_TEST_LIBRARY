<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/30
 * Time: 15:44
 */

#服务器的一些信息
$server = [
    "SERVER_NAME" => $_SERVER["SERVER_NAME"],
    "SERVER_SOFTWARE" => $_SERVER["SERVER_SOFTWARE"],
    "DOCUMENT_ROOT" => $_SERVER["DOCUMENT_ROOT"],
    "HTTP_HOST" => $_SERVER["HTTP_HOST"],
    "SCRIPT_NAME" => $_SERVER["SCRIPT_NAME"],
    "SCRIPT_FILENAME" => $_SERVER["SCRIPT_FILENAME"],
    "PHP_SELF" => $_SERVER["PHP_SELF"],
    "REQUEST_METHOD" => $_SERVER["REQUEST_METHOD"],
    "SERVER_PROTOCOL" => $_SERVER["SERVER_PROTOCOL"],
    "REQUEST_TIME" => $_SERVER["REQUEST_TIME"],
    "HTTP_ACCEPT" => $_SERVER["HTTP_ACCEPT"],
];

#print_r($server);


#客户端的一些信息

$client = array(
  "HTTP_USER_AGENT" => $_SERVER["HTTP_USER_AGENT"],
    "REMOTE_ADDR" => $_SERVER["REMOTE_ADDR"],
    "REMOTE_PORT" => $_SERVER["REMOTE_PORT"],
    "REMOTE_HOST" => $_SERVER["REMOTE_HOST"],
    "HTTP_REFERER" => $_SERVER["HTTP_REFERER"]
);
#print_r($client);