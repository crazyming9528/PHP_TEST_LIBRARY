<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/28
 * Time: 13:16
 */

namespace Strategy;


class FemaleStrategy implements UserStrategy
{

    public function showAd()
    {
        // TODO: Implement showAd() method.
        echo " 女性2019新款";
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo " 女性服饰";
    }
}