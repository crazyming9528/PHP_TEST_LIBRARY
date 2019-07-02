<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 23:54
 */


//验证提交

if (filter_has_var(INPUT_POST, "reg")) {
    $name = $_POST['name'];
    $password = $_POST["password"];
        $username = $account->formatting($name);
        $result = $account->register($username, $password);
        if ($result) {
            header("Location: login.php");
        } else {
            $msg = $account->getError();
            $msg_class = 'alert-danger';
}
}
