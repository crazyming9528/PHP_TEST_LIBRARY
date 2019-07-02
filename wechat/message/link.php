<?php

include "Util.php";
include 'LinkBase.php';


$signature = $_GET["signature"];
$timestamp = $_GET["timestamp"];
$nonce = $_GET["nonce"];
$echostr = $_GET['echostr'];
$token = "crazyming";
$xml_str = $GLOBALS['HTTP_RAW_POST_DATA'];


$wechat = new LinkBase($signature, $timestamp, $nonce, $echostr, $token);
//file_put_contents('log.txt', '收到请求-->' . time() . '->' . $signature . '->' . $timestamp . '->' . $nonce . '->' . $echostr . '->' . $token . '-->' . PHP_EOL, FILE_APPEND);
Util::saveLog('接收到请求', [$signature, $timestamp, $nonce, $echostr, $token]);
if ($wechat->checkSignature()) {
    echo $echostr;
    Util::saveLog('微信link成功');
} else {
    echo "error";
    Util::saveLog('微信link失败');
}

if (!empty($xml_str)) {
    $wechat->response($xml_str);
}


