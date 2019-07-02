<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/1
 * Time: 17:01
 */

include "base.php";
header("Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$REDIRECT_URI."&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect");