<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/31
 * Time: 17:11
 */

class Person
{
    public $name;
    public $email;
    public $gender = "保密";
    private $grade = 0;

    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Person constructor.
     * @param $name
     * @param $email
     * @param $gender
     */
    public function __construct($name, $email, $gender)
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function __destruct()
    {
        echo "<br>";
        echo __CLASS__ . "被销毁了";
    }

}


$ming = new Person("wangdongming", "wangdongming@qq.com", "男");

var_dump($ming);
echo "<br>";
echo $ming->name;
echo "<br>";
$ming->name = "crazyming";
echo "<br>";
echo $ming->name;
echo "<br>";
$ming->setGrade(100);
echo $ming->getGrade();
echo "<br>";
print_r($ming);
echo "<br>";
$bo = new Person("宋波", "songbo@qq.com", "男");
print_r($bo);


class Student extends Person
{

    private $school;

    public function setSchool($s)
    {
        $this->school = $s;
    }

    public function getSchool()
    {
        return $this->school;
    }

    public function __construct($name, $email, $gender, $school)
    {

        #调用父级构造函数
        parent::__construct($name, $email, $gender);
        $this->school = $school;
    }

}


$st1 = new Student('crazyming', "crazyming9528@qq.com", "男", "库尔勒市第三中学");
echo "<br>";
print_r($st1);

?>