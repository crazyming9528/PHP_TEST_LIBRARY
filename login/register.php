<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 23:28
 */
include "inc/classes/Account.php";
$account = new Account();
include "inc/handlers/reg-handler.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <title>password</title>
    <style>


        .border-r{
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
<!--    <h1 style="margin-top: 50px">欢迎登录</h1>-->
<!---->
<!--    <form action="--><?php //echo $_SERVER['PHP_SELF']?><!--" method="post">-->
<!--        <div class="from-group">-->
<!--            <label for="name">用户名</label><input required id="name" placeholder="请输入用户名" value="--><?php //echo isset($name)? $name : ''?><!--" class="form-control" type="text" name="name" />-->
<!--        </div>-->
<!---->
<!--        <div class="from-group">-->
<!--            <label for="password">密码</label><input required  id="password" placeholder="请输入密码"  class="form-control" type="password" name="password" />-->
<!--        </div>-->
<!---->
<!--                <br>-->
<!--                --><?php //if(isset($msg) && isset($msg_class)): ?>
<!--                    <div class="--><?php //echo $msg_class?><!-- border-r" style="padding: 15px">--><?php //echo $msg?><!--</div>-->
<!--                --><?php //endif; ?>
<!--                <br>-->
<!--                <button class="btn btn-primary" type="submit" name="login">提交</button>-->
<!---->
<!--    </form>-->


    <h1 style="margin-top: 50px">欢迎注册</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="from-group">
            <label for="name">用户名</label><input required id="name" placeholder="请输入用户名" value="<?php echo isset($name)? $name : ''?>" class="form-control" type="text" name="name" />
        </div>

        <div class="from-group">
            <label for="password">密码</label><input required id="password" placeholder="请输入密码"  class="form-control" type="password" name="password" />
        </div>

        <br>
        <?php if(isset($msg) && isset($msg_class)): ?>
            <div class="<?php echo $msg_class?> border-r" style="padding: 15px"><?php echo $msg?></div>
        <?php endif; ?>
        <br>
        <button class="btn btn-primary" type="submit" name="reg">提交</button>

    </form>
</div>
</body>
</html>

