<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/1
 * Time: 16:54
 */

echo "wechat";

include "base.php";

$sring = $_SERVER["QUERY_STRING"];


parse_str($sring, $query_arr);;

print_r($query_arr);
$code = $query_arr["code"];


function send_post($url)
{
    $postdata = http_build_query();
    $options = array(
        'http' => array(
           'method' => 'get',
           'header' => 'application/json',
           'content' => $postdata,
          'timeout' => 15 * 60 // 超时时间（单位:s）
        )
   );
 $context = stream_context_create($options);
 $result = file_get_contents($url, false, $context);

    return $result;
}

echo "<br/>";
echo "<br/>";
$uu = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . $appid . "&secret=" . $appsecret . "&code=" . $code . "&grant_type=authorization_code";
echo $uu;
echo "11111111111";
$r= send_post($uu);
var_dump($r);
echo "<br/>";
echo "<br/>";
$res = json_decode($r);
echo "<br/>";
echo "<br/>";

$access_token=$res->access_token;
$openid=$res->openid;
echo "oppppppppppppppppppppppppppppppppppppppppppppppppp";
echo "<br/>";
echo $openid;
echo "<br/>";
echo $access_token;
echo "<br/>";
echo "<br/>";
$url =" https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid."=zh_CN";
echo $url;

$userinfo = send_post($url);
//$userinfo = getJson();
function getJson($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
}

print_r($userinfo);

var_dump($userinfo);
include "html.html";