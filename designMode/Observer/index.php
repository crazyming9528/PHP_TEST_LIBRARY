<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/29
 * Time: 11:27
 */
namespace Observer;
require 'Observer.php';
require 'EventGenerator.php';
class Event extends EventGenerator {
    public function trigger(){
        echo "事件发生了!!<br/>";
        $this->notify();
    }

}

$event =new Event();
$event->addObserver(new Ob('Crazyming'));
$event->addObserver(new Ob('crazy'));
$event->addObserver(new Ob('supersong'));
$event->trigger();