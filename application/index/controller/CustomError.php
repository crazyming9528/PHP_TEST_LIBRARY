<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class CustomError extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }

    public function not_found(){
        return json(['code'=>404,'msg'=>'请求无效'])->code(404);
    }
}
