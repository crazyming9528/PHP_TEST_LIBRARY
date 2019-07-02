<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 14:09
 */


session_start();

if(!empty($_SESSION)){

    $name=$_SESSION['name'];
    $email=$_SESSION["email"];
    print_r($_SESSION);

}else{
    echo "no session";
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
    <h1>show session </h1>
<?php if (isset($name) && isset($email)): ?>
    <p>
        <?php echo $name?>
    </p>
    <p>
        <?php echo $email?>
    </p>
<?php endif; ?>
    <a href="page3.php">unset session</a>

</div>


</body>
</html>
