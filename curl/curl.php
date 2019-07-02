<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/11
 * Time: 21:36
 */



//https://www.cnblogs.com/fyy-888/p/5329394.html

///1
$my_curl = curl_init();    //初始化一个curl对象
curl_setopt($my_curl, CURLOPT_URL, "http://120.78.149.155:8040/news/getNewsById?newsId=931169af-fe77-45b5-b086-2e7f3176a7c2");    //设置你需要抓取的URL
curl_setopt($my_curl,CURLOPT_RETURNTRANSFER,1);    //设置是将结果保存到字符串中还是输出到屏幕上，1表示将结果保存到字符串
$str = curl_exec($my_curl);    //执行请求
echo $str;    //输出抓取的结果
curl_close($my_curl);    //关闭url请求


//2

$content = file_get_contents("http://120.78.149.155:8040/news/getNewsById?newsId=931169af-fe77-45b5-b086-2e7f3176a7c2");
//echo $content;
