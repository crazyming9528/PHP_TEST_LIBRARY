<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/28
 * Time: 9:46
 */


namespace Adapter ;
class PDO implements IDatabase
{

    protected $conn;

//    public function __construct($host, $user, $password, $dbname)
//    {
//        $p = new \PDO("mysql://host=$host;dbname=$dbname", $user, $password);// \PDO 中的到\是根命名空间
//        $this->conn = $p;
//    }


    function connect($host, $user, $password, $dbname)
    {
        // TODO: Implement connect() method.
        $p = new \PDO("mysql://host=$host;dbname=$dbname", $user, $password);// \PDO 中的到\是根命名空间
        $this->conn = $p;
    }


    function query($sql)
    {
        // TODO: Implement query() method.
        $this->conn->query('select * from user');
    }

    function close()
    {
        // TODO: Implement close() method.

        unset($this->conn);
    }
}