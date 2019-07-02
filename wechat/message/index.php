<?php

//测试微信消息接口

$signature = $_GET["signature"];
function checkSignature()
{
    $signature = $_GET["signature"];
    $timestamp = $_GET["timestamp"];
    $nonce = $_GET["nonce"];
    $echostr = $_GET['echostr'];
    $token = "crazyming";
    $tmpArr = array($timestamp, $nonce, $token);

    sort($tmpArr, SORT_STRING);

    $tmpStr = implode($tmpArr);
    $tmpStr = sha1($tmpStr);

    if ($tmpStr === $signature) {
        echo $echostr;
        file_put_contents('log.txt', '微信消息接口验证成功-->'.time().'-->' . $echostr . PHP_EOL, FILE_APPEND);
    } else {
        echo "错误";
        file_put_contents('log.txt', '微信消息接口验证失败-->'.time().'-->'. PHP_EOL, FILE_APPEND);
    }

}
file_put_contents('req.txt', '接收到消息-->'.time().'-->'.json_encode($_REQUEST). PHP_EOL, FILE_APPEND);
file_put_contents('req_2.txt', '接收到消息-->'.time().'-->'.json_encode($_REQUEST). PHP_EOL, FILE_APPEND);

//checkSignature();





$request_xml="";
msg();
function msg(){

    $xml_str = $GLOBALS['HTTP_RAW_POST_DATA'];

    if(empty($xml_str)){
        die('');
    }

    if(!empty($xml_str)){
        libxml_disable_entity_loader(true);
        $request_xml = simplexml_load_string($xml_str, 'SimpleXMLElement', LIBXML_NOCDATA);
        //判断该消息的类型，通过元素MsgType
        switch ($request_xml->MsgType){
            case 'event':
                //判断具体的时间类型（关注、取消、点击）
                $event = $request_xml->Event;
                if ($event=='subscribe') { // 关注事件
                    doSubscribe($request_xml);
                }elseif ($event=='CLICK') {//菜单点击事件
//                    $this->_doClick($request_xml);
                }elseif ($event=='VIEW') {//连接跳转事件
//                    $this->_doView($request_xml);
                }else{

                }
                break;
            case 'text'://文本消息
                backMsg($request_xml);
                break;
            case 'image'://图片消息
               // $this->_doImage($request_xml);
                break;
            case 'voice'://语音消息
               // $this->_doVoice($request_xml);
                break;
            case 'video'://视频消息
               // $this->_doVideo($request_xml);
                break;
            case 'shortvideo'://短视频消息
              //  $this->_doShortvideo($request_xml);
                break;
            case 'location'://位置消息
               // $this->_doLocation($request_xml);
                break;
            case 'link'://链接消息
              //  $this->_doLink($request_xml);
                break;
        }


    }

}
function backMsg($request_xml){
    //处理该事件，向用户发送关注信息
    file_put_contents('backMsg.txt', '收到的消息-->'.time().'-->'.json_encode($request_xml). PHP_EOL, FILE_APPEND);
    $content ='你发送的文本:'.$request_xml->Content. PHP_EOL.'你的openid是:'.$request_xml->FromUserName.PHP_EOL.'公众号原始id:'.$request_xml->ToUserName. PHP_EOL;
    $msg_template='<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[%s]]></Content></xml>';
    $response = sprintf($msg_template, $request_xml->FromUserName, $request_xml->ToUserName, time(),$content);
    die($response);
}

function doSubscribe($request_xml){
    //处理该关注事件，向用户发送关注信息
    file_put_contents('subscribe.txt', '新的关注-->'.time().'-->'.json_encode($request_xml). PHP_EOL, FILE_APPEND);
    $content = '欢迎关注我!'.PHP_EOL.'你的openid是:'.$request_xml->FromUserName.PHP_EOL.'公众号原始id:'.$request_xml->ToUserName.PHP_EOL;
    $msg_template='<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[%s]]></Content></xml>';
    $response = sprintf($msg_template, $request_xml->FromUserName, $request_xml->ToUserName, time(),$content);
    die($response);
}



