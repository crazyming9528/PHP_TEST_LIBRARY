<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/28
 * Time: 9:46
 */
namespace Adapter;

class Mysql implements IDatabase{

    protected $conn;
    function connect($host, $user, $password, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysql_connect($host,$user,$password);
        mysql_select_db($dbname,$conn);
        $this->conn =$conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.

        $res = mysql_query($sql,$this->conn);
        return $res;
    }
    function close()
    {
        // TODO: Implement close() method.

        mysql_close($this->conn);
    }
}