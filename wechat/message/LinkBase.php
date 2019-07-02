<?php


class LinkBase
{
    public $signature;
    public $timestamp;
    public $nonce;
    public $echostr;
    public $token;
    public $openid;
    public $access_token;
    public $request_xml;
    public $appid = 'wxd704eab1dbcff5dd';
    public $appsecret = 'fc0b00578505681a987b59da11e8bfc7';

    public function __construct($signature, $timestamp, $nonce, $echostr, $token)
    {

        $this->signature = $signature;
        $this->timestamp = $timestamp;
        $this->nonce = $nonce;
        $this->echostr = $echostr;
        $this->token = $token;


    }

    public function checkSignature()
    {
        $tmpArr = array($this->timestamp, $this->nonce, $this->token);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        return ($tmpStr === $this->signature);
//
    }

    public function response($xml_str)
    {

        if (empty($xml_str)) {
            die('');
        }
        libxml_disable_entity_loader(true);
        $request_xml = simplexml_load_string($xml_str, 'SimpleXMLElement', LIBXML_NOCDATA);
        $this->request_xml = $request_xml;
        $this->openid = $request_xml->FromUserName;
        //判断该消息的类型，通过元素MsgType
        switch ($request_xml->MsgType) {
            case 'event':
                //判断具体的时间类型（关注、取消、点击）
                $event = $request_xml->Event;
                if ($event == 'subscribe') { // 关注事件
                    $this->doSubscribe();
                } elseif ($event == 'CLICK') {//菜单点击事件
//                    $this->_doClick($request_xml);
                } elseif ($event == 'VIEW') {//连接跳转事件
//                    $this->_doView($request_xml);
                } else {

                }
                break;
            case 'text'://文本消息
//                $this->doTextBack();
                $this->getAccessToken();
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

    public function doSubscribe()
    {
//处理该关注事件，向用户发送关注信息
        Util::saveLog('收到新的关注', json_encode($this->request_xml), 'msg.txt');
        $content = '欢迎关注我!' . PHP_EOL . '你的openid是:' . $this->request_xml->FromUserName . PHP_EOL . '公众号原始id:' . $this->request_xml->ToUserName . PHP_EOL;
        $msg_template = '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[%s]]></Content></xml>';
        $response = sprintf($msg_template, $this->request_xml->FromUserName, $this->request_xml->ToUserName, time(), $content);
        die($response);

    }


    public function returnText($content)
    {
        Util::saveLog('返回了一条文本消息', [$content], 'send.txt');
//        $content = '你发送的文本:' . $request_xml->Content . PHP_EOL . '你的openid是:' . $request_xml->FromUserName . PHP_EOL . '公众号原始id:' . $request_xml->ToUserName . PHP_EOL;
//        $msg_template = '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[%s]]></Content></xml>';
        $msg_template = '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[%s]]></Content></xml>';
        $response = sprintf($msg_template, $this->request_xml->FromUserName, $this->request_xml->ToUserName, time(), $content);
        die($response);

    }

    public function doTextBack2($ob)
    {

        Util::saveLog('用户资料', json_encode($ob), 'user.txt');

        $content = $content = $this->request_xml->nickname . '你好,你发送的消息是:' . PHP_EOL . $this->request_xml->Content . PHP_EOL . '资料:' . PHP_EOL . "openid:" . $ob->openid . PHP_EOL . "地区:" . $ob->country . ',' . $ob->province . ',' . $ob->city;
        Util::saveLog('返回了一条文本消息', [$content], 'send.txt');
        $msg_template = '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[%s]]></Content></xml>';

        $response = sprintf($msg_template, $this->request_xml->FromUserName, $this->request_xml->ToUserName, time(), $content);
        die($response);

    }

    public function getAccessToken()
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $this->appid . "&secret=" . $this->appsecret;
        Util::saveLog('url', [$url], 'at.txt');
        $returnData = json_decode(Util::curlRequest($url));
        Util::saveLog('access_token接口', [Util::curlRequest($url)], 'at.txt');
        $returnData = json_decode(Util::curlRequest($url));
        $this->access_token = $returnData->access_token;
        $this->getInfo();
    }

    public function getInfo()
    {
        $url = 'https://api.weixin.qq.com/cgi-bin/user/info?access_token=' . $this->access_token . '&openid=' . $this->openid . '&lang=zh_CN';
        $res = Util::curlRequest($url);
        Util::saveLog('获取信息', [$res], 'user.txt');
        $this->doTextBack2(json_decode($res));

    }


}