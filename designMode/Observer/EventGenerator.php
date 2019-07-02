<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/29
 * Time: 15:22
 */

namespace Observer;


 abstract class EventGenerator
{
    private $observers =array();
    function addObserver($observer){
        $this->observers[] = $observer;
    }
    function  notify(){

        foreach ($this->observers as $observer)
        {
            $observer->update();
        }

    }

}