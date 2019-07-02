<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/30
 * Time: 9:24
 */

namespace Observer;

interface Observer{
    function update($event_info = null);
}


class Ob  implements  Observer{
    private $name;
    function __construct($name)
    {
        $this->name =$name;

    }

    function update($event_info = null)
    {
        echo "逻辑".$this->name."<br>\n";
        // TODO: Implement update() method.
    }
}