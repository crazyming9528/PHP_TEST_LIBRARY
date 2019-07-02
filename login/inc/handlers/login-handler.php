<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 23:54
 */



/**
 * @param $str
 * @return mixed
 */


//验证提交

if (filter_has_var(INPUT_POST, "login")) {
    $name = $_POST['name'];
    $password = $_POST["password"];
    $username = $account->formatting($name);
    $result = $account->login($username, $password);
    if ($result) {
        header("Location: index.php");
    } else {
        $msg = $account->getError();
        $msg_class = 'alert-danger';
    }
}
