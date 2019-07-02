<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/26
 * Time: 9:00
 */



if (isset($_COOKIE['auth'])){
    $auth=$_COOKIE['auth'];
    $arrTemp =explode(":",$auth);
    $id = end($arrTemp);//取到用户id 此时到数据库查询该id 的name 和密码
    $name =$_COOKIE['username']; $password ="52013141";   $salt ="jiayan123";// 假设这些都是通过id从数据库取出来的

    $str =md5($name.$password.$salt);
    if ($str === reset($arrTemp)){
        header('Location:index.php');
    }

}


//验证提交

if (filter_has_var(INPUT_POST,"submit")){
    $name = $_POST['name'];
    $pw = $_POST["pw"];


    if(!empty($name) && !empty($pw)){

        if (isset($_POST["autoLogin"])){
            setcookie("username",$name,strtotime('+7 days'));
            $salt ="jiayan123";
            $auth =md5($name.$pw.$salt).":56";//模拟一个凭证  结构为 用户名密码加盐后的md5:用户id  56是模拟的用户id
            setcookie("auth", $auth,strtotime('+7 days'));
        }else{
            setcookie("username",$name);
        }

            $msg ="Login successfully";
            $msg_class = 'alert-success';
            header('Location:index.php');


    }else{
        $msg ="请完整填写表单内的内容!";
        $msg_class = 'alert-danger';
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <title>php cookies</title>
</head>
<body>

<div class="container">
    <h1 style="margin-top: 50px">cookies自动登录</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="from-group">
            <label for="name">用户名</label><input id="name" value="<?php echo isset($name)? $name : 'crazyming'?>" class="form-control" type="text" name="name" />
        </div>
        <div class="from-group">
            <label for="email">密码</label><input id="email" value="<?php echo isset($email)? $email : '52013141'?>" class="form-control" type="text" name="pw" />
        </div>

        <div class="from-group">
            <label for="autoLogin">七天自动登录</label><input id="autoLogin" type="checkbox" name="autoLogin" value="" />
        </div>

        <br>
        <?php if(isset($msg) && isset($msg_class)): ?>
            <div class="<?php echo $msg_class?>" style="padding: 15px"><?php echo $msg?></div>
        <?php endif; ?>
        <br>
        <button class="btn btn-primary" type="submit" name="submit">提交</button>

    </form>
</div>
</body>
</html>

