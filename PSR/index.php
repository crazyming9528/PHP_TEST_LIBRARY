<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/26
 * Time: 17:13
 */

define('BASEDIR',__DIR__);

include BASEDIR.'/Common/Loader.php';
spl_autoload_register('Common\Loader::autoload');
Common\Object::test();
APP\Controller\Home\Index::test();

echo "<p>PSR规范学习视频 https://www.imooc.com/video/4848</p>";