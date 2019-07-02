<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/26
 * Time: 14:47
 */

class Factory
{
    static public function fac($id)
    {
        if ($id === 1) return new A();
        elseif ($id == 2) return new B();
        elseif ($id == 3) return new C();
        return new D;
    }
}

interface FetchName
{
    public function getName();
}

class A implements FetchName
{
    private $name = "AAAAA";

    public function getName()
    {
        // TODO: Implement getName() method.

        return $this->name;
    }
}


class B implements FetchName
{
    private $name = "BBBBBB";

    public function getName()
    {

        // TODO: Implement getName() method.
        return $this->name;
    }

}


class C implements FetchName
{
    private $name = "CCCCCCCCC";

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

}


class D implements FetchName
{
    private $name = "DDDDD";

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

}

$o = Factory::fac(50);

if ($o instanceof FetchName) {
    echo $o->getName();
}

$p = Factory::fac(1);
echo $p->getName();
