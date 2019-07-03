<?php


namespace app\common\util;


class AjaxReturn
{

    // +----------------------------------------------------------------------
    // | 正确响应码
    // +----------------------------------------------------------------------
    const SUCCESS_RESPONSE = ['code' => 10000, 'message' => '操作成功'];

    // +----------------------------------------------------------------------
    // | 一般错误响应码
    // +----------------------------------------------------------------------
    const ERROR_RESPONSE = ['code' => 10001, 'message' => '操作失败'];

    // +----------------------------------------------------------------------
    // | 系统级错误响应码
    // +----------------------------------------------------------------------
    const ERROR_RESPONSE_SYSTEM = ['code' => 10002, 'message' => '系统错误 请稍后再试'];

    // +----------------------------------------------------------------------
    // | 服务级错误响应码
    // +----------------------------------------------------------------------
    const ERROR_RESPONSE_LOGIN_FAILED = ['code' => 10003, 'message' => '登录失败'];
    const ERROR_RESPONSE_VALIDATION_FAILED = ['code' => 10004, 'message' => '无此操作权限'];
    const ERROR_RESPONSE_HTTP_METHOD_NOT_ALLOWED = ['code' => 10005, 'message' => '网络请求不予许'];
    const ERROR_RESPONSE_USER_AUTH_FAIL = ['code' => 10006, 'message' => '用户名或者密码错误'];
    const ERROR_RESPONSE_DATA_CHANGE = ['code' => 10007, 'message' => '数据没有任何更改'];
    const ERROR_RESPONSE_DATA_REPEAT = ['code' => 10008, 'message' => '数据重复'];
    const ERROR_RESPONSE_DATA_NOT = ['code' => 10009, 'message' => '数据不存在'];
    const ERROR_RESPONSE_DATA_VALIDATE_FAIL = ['code' => 100010, 'message' => '数据验证失败'];
    const ERROR_RESPONSE_DATABASE_ERROR = ['code' => 100011, 'message' => '数据库操作失败'];
    const ERROR_RESPONSE_TIMEOUT = ['code' => 100020, 'message' => '超时'];


    public static function jsonPack($data=[], $status = self::SUCCESS_RESPONSE)
    {
        $json = $status;
        $json['data'] = $data;
        return $json;

    }

}