<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 12:14
 */


//验证提交

if (filter_has_var(INPUT_POST,"submit")){
    $name = $_POST['name'];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if(!empty($name) && !empty($email) && !empty($message)){
//        echo $name;echo $email;echo $message;
        if (filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            $msg ="请输入合法的邮箱!";
            $msg_class = 'alert-danger';
        }else{
            $subject ="测试邮件发送";
            if(mail($email,$subject,$message)){
                $msg ="提交成功!";
                $msg_class = 'alert-success';
            }else{
                $msg ="发送邮件失败";
                $msg_class = 'alert-danger';
            }

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
    <h1 style="margin-top: 50px">邮件发送</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<div class="from-group">
    <label for="name">用户名</label><input id="name" value="<?php echo isset($name)? $name : ''?>" class="form-control" type="text" name="name" />
</div>
        <div class="from-group">
        <label for="email">邮箱</label><input id="email" value="<?php echo isset($email)? $email : ''?>" class="form-control" type="text" name="email" />
        </div>
        <div class="from-group">
            <label for="message">消息</label><textarea id="message"   class="form-control"  name="message" ><?php echo isset($message)? $message : ''?></textarea>
        </div>
                <br>
                <?php if(isset($msg) && isset($msg_class)): ?>
                <div class="<?php echo $msg_class?>" style="padding: 15px"><?php echo $msg?></div>
               <?php endif; ?>
                <br>
        <button class="btn btn-primary" type="submit" name="submit">发送</button>

    </form>
</div>
</body>
</html>
