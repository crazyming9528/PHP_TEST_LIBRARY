<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/26
 * Time: 13:42
 */

/**
 * 单例模式
 */
class Single
{
    private $name;

    private function __construct()
    {

    }

    static public $instance;

    static public function getInstance()
    {
        if (!self::$instance) self::$instance = new self();
        return self::$instance;
    }

    public function setName($n)
    {
        $this->name = $n;

    }

    public function getName()
    {
        return $this->name;
    }

}

$oa = Single::getInstance();
$ob = Single::getInstance();
var_dump($oa);


$oa->setName("crazyming");
$ob->setName("ming");

echo "<br>";
echo $oa->getName();
echo "<br>";
echo $ob->getName();
