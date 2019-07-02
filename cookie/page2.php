<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 14:09
 */




if(isset($_COOKIE['username']) && isset($_COOKIE['email'])){

    $name=$_COOKIE['username'];
    $email=$_COOKIE["email"];
    print_r($_COOKIE);

}else{
    echo "no cookies";
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
    <h1>show cookies </h1>
    <?php if (isset($name) && isset($email)): ?>
        <p>
            <?php echo $name?>
        </p>
        <p>
            <?php echo $email?>
        </p>
    <?php endif; ?>
    <a href="page3.php">clear cookies</a>

</div>


</body>
</html>
