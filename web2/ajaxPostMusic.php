<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/24
 * Time: 9:50
 */
//echo "11";
//var_dump($_POST);
//echo "<br>";
//var_dump($_FILES);

if ($_FILES['file']['error'] ===0){
    $local_file = 'upload/'.$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $local_file);
}
$data =array($_POST,$_FILES);
echo  json_encode($data);
//if (isset($_POST['up'])){
//    echo "ok";
//}


?>


