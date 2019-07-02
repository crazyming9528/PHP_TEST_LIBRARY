<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/23
 * Time: 17:57
 */


if (isset($_POST['ok'])){

    if ($_FILES['file']['error'] === 0 ){
        echo  $_FILES['file']['name'].'上传成功';
        echo $_FILES['file']['tmp_name'];
    }else{
        echo "文件上传错误";
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
    <title>Document</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

    <input type="text" />
    <input type="file" accept="audio/*" name="file" id="file" value="">
    <input type="submit" name="ok">
</form>
</body>
</html>
