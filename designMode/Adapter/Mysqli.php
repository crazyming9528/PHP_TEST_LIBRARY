<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/28
 * Time: 9:46
 */
namespace Adapter;
class Mysqli implements IDatabase{

    protected $conn;
    function connect($host, $user, $password, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect('localhost','root','root','tp');
        $this->conn =$conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.

        $res = mysqli_query($this->conn,$sql);
        return $res;
    }
    function close()
    {
        // TODO: Implement close() method.

        mysqli_close($this->conn);
    }
}