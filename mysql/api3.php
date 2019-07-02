<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 22:35
 */

function fetchData($sql){

    $mysqli = new mysqli("localhost","root","root","php_test","3306");

    if($mysqli->connect_errno){
        echo $mysqli->connect_errno;
        die($mysqli->connect_error);
    }else{

        echo "数据库连接成功->";
        $result = $mysqli->query($sql);


        if ($result->num_rows){

            #第一种方法
            #依次调用 mysql_fetch_row() 将返回结果集中的下一行，如果没有更多行则返回 FALSE。
//            while ($row = $result->fetch_row()){
//                print_r($row);
//            }

            #第2种方法
            while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                print_r($row);
                echo "<hr>";
            }


            #第3种方法
      $row =$result->fetch_all(MYSQLI_ASSOC);
//            print_r($row);
            echo json_encode($row);

        }

        if($result){
            echo "更新成功->";
        }else{
            echo "更新失败->";
        }

        $mysqli->close();

    }


}

fetchData("SELECT * FROM `user`");