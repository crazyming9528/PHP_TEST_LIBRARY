<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/30
 * Time: 15:42
 */

include "server-info.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <title>服务器与客户端信息</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">服务端信息</h1>
    <ul class="list-group">
        <?php foreach ($server as $key => $value): ?>
            <li class="list-group-item">
                <strong><?php echo $key ?>:</strong> <?php echo $value; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <h1 class="text-center">客户端信息</h1>
    <ul class="list-group">
        <?php foreach ($client as $key => $value): ?>
            <li class="list-group-item">
                <strong><?php echo $key ?>:</strong> <?php echo $value; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
