<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/29
 * Time: 15:53
 */


function brbr(){
    $br = "<br/>";
    echo $br.$br;
}

/**
 * @param string $name
 */
function echoSomething($name = "default"){
    echo "hello ".$name."<br/>";
}
echoSomething();
echoSomething("crazyming");


echo  "函数传引用";
brbr();

$number = 10;
echo "number是10:";
brbr();

function add5($num){
    $num=$num+5;
}


function add10(&$num){
    $num=$num+10;
}
add5($number);
echo "number没有变:".$number;
brbr();
add10($number);
echo "number变了:".$number; //& 使得传入的是内存地址 的引用
brbr();

echo "字符串函数::";
brbr();
brbr();


$output = substr("www.qq.com",4);

echo $output;
brbr();
echo  strlen($output);
var_dump($output);

$output2 = substr("四川省成都市高新区",3);

echo $output2;
brbr();
echo  strlen($output2);
brbr();
echo mb_strlen($output2);
brbr();
var_dump($output2);


//压缩
brbr();
$output3 = "hello world";
$gz = gzcompress($output3);;
echo gzcompress($gz);
brbr();
echo gzuncompress($gz);


brbr();
brbr();
brbr();
//数组
echo "数组";
brbr();

$arry1 = array();

array_push($arry1,"world");

print_r($arry1);
brbr();
array_unshift($arry1,"hello");
print_r($arry1);
brbr();
array_shift($arry1);
print_r($arry1);
brbr();

$arry2 = [1,6,4,10,5,6,7,8,9];
sort($arry2);
print_r($arry2);
brbr();
$str1 = implode(',',$arry2);
echo $str1;
brbr();
$arry3 = explode(",",$str1);

print_r($arry3);







