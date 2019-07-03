<?php

namespace app\index\controller;
class Index
{
    public function index()
    {
        return json([
            'code'=>200,
            'msg'=>'请求成功',
            "快速创建模块 例如:api"=>'php think build --module api',
            '快速创建控制器   生成index模块的SystemInfo资源控制器'=>'php think make:controller index/SystemInfo'
            ]);
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function config()
    {
        //所有的配置信息
        dump(config(""));
    }

    public function env()
    {

        //所有的环境变量
        dump($_ENV);
//        Env::get('database.username');
//        Env::get('database.password');

    }

    public function jd(){
        $aa = 0.14 * 100;
        $bb= 2022.5123+100.001+0.1;
        var_dump($aa,$bb);
    }
}
