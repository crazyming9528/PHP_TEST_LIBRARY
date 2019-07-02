<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 13:55
 */

//验证提交

if (filter_has_var(INPUT_POST,"submit")){
    $name = $_POST['name'];
    $email = $_POST["email"];


    if(!empty($name) && !empty($email)){
        if (filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            $msg ="请输入合法的邮箱!";
            $msg_class = 'alert-danger';
        }else{
            session_start();
            $_SESSION['name'] =$name;
            $_SESSION['email'] =$email;
            $msg ="Session was saved successfully";
            $msg_class = 'alert-success';
            header('Location:page2.php');
        }

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
    <title>email</title>
</head>
<body>

<div class="container">
    <h1 style="margin-top: 50px">session</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="from-group">
            <label for="name">用户名</label><input id="name" value="<?php echo isset($name)? $name : ''?>" class="form-control" type="text" name="name" />
        </div>
        <div class="from-group">
            <label for="email">邮箱</label><input id="email" value="<?php echo isset($email)? $email : ''?>" class="form-control" type="text" name="email" />
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

