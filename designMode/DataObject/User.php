<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/29
 * Time: 10:03
 */

namespace DataObject;
require '../Adapter/IDatabase.php';
require '../Adapter/Mysqli.php';
use Adapter\Mysqli;

class User
{
    public $id;
    public $name;
    public $phone;
    public $password;
    protected $db;
    function  __construct($id)
    {

        $this->db = new Mysqli();
        $this->db->connect('localhost','root','root','tp');
        $res= $this->db->query('select * from user limit 1');
        $res = $res->fetch_assoc();
        $this->id = $res['id'];
        $this->name =$res['name'];
        $this->phone = $res['phone'];
        $this->password =$res['password'];
    }

    function  __destruct()
    {
        // TODO: Implement __destruct() method.
        $sql ="update user set name = '{$this->name}',phone ='{$this->phone}' where id ='{$this->id}'";
        echo '<br/>'.$sql;
        $this->db->query($sql);
        $this->db->close();
    }

}