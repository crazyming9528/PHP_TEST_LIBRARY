<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 16:00
 */


setcookie("username",'text',time()-3600);//通过 设置过期时间 清除cookies
setcookie("email",'text',time()-3600);
header("Location: page2.php");