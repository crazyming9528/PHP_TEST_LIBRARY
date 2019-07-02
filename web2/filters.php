<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/30
 * Time: 20:40
 */

if(filter_has_var(INPUT_POST,'data')){

    echo "data found";

    if (filter_var())
}else{

    echo "no found data";
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


<form action="<?php echo  $_SERVER["PHP_SELF"]?>" method="post">
    <label for="username2">用户名</label><input id="username2" type="text" name="data" />

    <button type="submit">post提交</button>
</form>

</body>
</html>