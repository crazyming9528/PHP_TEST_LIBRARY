<?php

namespace app\index\controller;

use think\Controller;

class NotFound extends Controller
{
 
    public function index()
    {
       return json(['code'=>404,'msg'=>'请求无效']);
    }


}
