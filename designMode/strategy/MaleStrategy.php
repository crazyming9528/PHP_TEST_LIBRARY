<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/28
 * Time: 13:21
 */

namespace Strategy;


class MaleStrategy implements UserStrategy
{

    public function showAd()
    {
        // TODO: Implement showAd() method.
        echo " 2019 IPad 新款";
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo " 数码产品";
    }
}