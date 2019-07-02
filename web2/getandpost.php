<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/30
 * Time: 16:47
 */
var_dump($_REQUEST);
if (isset($_GET["username"])){
    echo "<br>get<br>";
    print_r($_GET);
    echo $_GET["username"];
    echo "<br>query sting<br>";
    echo $_SERVER["QUERY_STRING"];
}

if (isset($_POST["username"])){
    echo "<br>post<br>";
//    print_r($_POST);
    var_dump($_POST);
    var_dump($_POST["username"]);

//    echo $_POST["username"];
}


/**
 * get 和 post $_REQUEST都可以拿到
 */
if (isset($_REQUEST["username"])){
    echo "<br>REQUEST<br>";
    print_r($_REQUEST);
    echo $_REQUEST["username"];
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

<form action="getandpost.php" method="get">
    <label for="username">用户名</label><input id="username" type="text" name="username" />
    <label for="phone">电话</label><input id="phone" type="text" name="phone" />
    <button type="submit">get提交</button>
</form>

<form action="getandpost.php" method="post">
    <label for="username2">用户名</label><input id="username2" type="text" name="username[]" />
    <br>
    <input  type="text" name="username[]" />
    <input  type="text" name="username[]" />
    <input  type="text" name="username[]" />
    <input  type="text" name="username[]" />
    <br>

    <label for="phone2">电话</label><input id="phone2" type="text" name="phone" />
    <button type="submit">post提交</button>
</form>

</body>
</html>
