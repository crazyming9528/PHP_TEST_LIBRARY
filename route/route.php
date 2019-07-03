<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});


Route::get('', 'index/index/index');//默认匹配  不加的话  无法匹配到默认模块默认控制器默认操作 会走miss路由

//Route::miss('index/NotFound/index');//如果希望在没有匹配到所有的路由规则后执行一条设定的路由，可以注册一个单独的MISS路由：  //一旦设置了MISS路由，相当于开启了强制路由模式

Route::get('config','index/index/config')
    ->filter("type", 1);//只有type参数等于1  才会匹配到该路由 例如:http://tp5.crazy.com/config?type=1
Route::allowCrossDomain();//路由全局允许跨域
Route::get('hello/:name', 'index/hello');
Route::resource('sync','dev/sync');

return [

];