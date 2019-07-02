<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/28
 * Time: 13:22
 */

namespace Strategy;
require "UserStrategy.php";
require 'FemaleStrategy.php';
require 'MaleStrategy.php';
class Page
{

    protected $strategy;

    function index()
    {
        echo 'Ad:';
        $this->strategy->showAd();
        echo '<br/>';
        $this->strategy->showCategory();

    }

    function setStrategy($strategy)
    {

        $this->strategy = $strategy;
    }


}


$page = new Page();
if (isset($_GET['strategy'])) {
//    var_dump($_GET['strategy']);
    switch ($_GET['strategy']) {
        case 'male':
            $strategy = new MaleStrategy();
            break;
        case 'female':
            $strategy = new FemaleStrategy();
            break;
    }
    if (isset($strategy)) {
        $page->setStrategy($strategy);
        $page->index();
    }


}

