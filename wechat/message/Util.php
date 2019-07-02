<?php


class Util
{

    public static function curlRequest($url, $post = '', $cookie = "")
    {

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        curl_setopt($curl, CURLOPT_URL, $url);
        if ($post) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
        }
        if ($cookie) {
            curl_setopt($curl, CURLOPT_COOKIE, $cookie);
        }
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //ssl不验证证书下同
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); //ssl不验证
        $res = curl_exec($curl);
        curl_close($curl);
        return $res;


    }

    public static function saveLog($message = "日志信息", $data = [], $file = "log.txt")
    {
        file_put_contents($file, date("Y-m-d H:i:s", time()) . '--' . $message . '-->' . implode($data) . PHP_EOL, FILE_APPEND);
    }

}