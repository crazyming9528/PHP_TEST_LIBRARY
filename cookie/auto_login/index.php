<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/26
 * Time: 9:02
 */

$userIsLogin = false;
if (isset($_COOKIE['username'])){

    if (isset($_COOKIE['auth'])){
        $auth=$_COOKIE['auth'];
        $arrTemp =explode(":",$auth);
        $id = end($arrTemp);//取到用户id 此时到数据库查询该id 的name 和密码
        $name =$_COOKIE['username']; $password ="52013141";   $salt ="jiayan123";// 假设这些都是通过id从数据库取出来的

        $str =md5($name.$password.$salt);
        if ($str === reset($arrTemp)){
            $userIsLogin =true;
            $msg = "七天自动登录";
        }

    }else{
        $name =$_COOKIE['username'];
        setcookie('username',$name);
        $msg = "无法七天自动登录";
        $userIsLogin =true;
    }




}


if(isset($_GET["toLogin"])){
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>首页</h1>
    <?php if ($userIsLogin):?>
    欢迎你  <?php echo $name ?>(<?php echo $msg ?>)
    <?php else:?>
    <a href="<?php echo $_SERVER['PHP_SELF']?>?toLogin=ok">对不起 还未登录  请登录!</a>
    <?php endif;?>
</div>
</body>
</html>
