<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/4/1
 * Time: 0:05
 */

class Account
{

    private $errorArray;

    public function __construct()
    {
        $this->errorArray = [];
    }


    private function rightString($str)
    {
        return str_replace(" ", "", strip_tags($str));//去除标签 清除空格
    }

    private function checkUsername($str, $type)
    {
        if (empty($str)) {
            array_push($this->errorArray, "用户名不能为空!");
            return;
        }

        if ($type === "reg") {
            if ($str === "crazyming") {
                array_push($this->errorArray, "用户已经被注册!");
                return;
            }
            if (strlen($str) > 25 || strlen($str) < 5) {
                array_push($this->errorArray, "用户名的长度要在5-25之间!");
                return;
            }
        } else if ($type === "login") {
            if ($str === "ceshi") {
                array_push($this->errorArray, "用户名不存在!");
                return;
            }
        }

    }


    private function checkPassword($str, $type)
    {
        if (empty($str)) {
            array_push($this->errorArray, "密码不能为空!");
            return;
        }

        if ($type === "reg") {
            if (strlen($str) < 10) {
                array_push($this->errorArray, "密码需要大于10个字符!");
                return;
            }
        } else if ($type === "login") {
            if (empty($this->errorArray)) {
                if ($str !== "52013141") {
                    array_push($this->errorArray, "密码错误!");
                }

            }
        }

    }

    public function formatting($str)
    {
        return $this->rightString($str);
    }

    public function getError()
    {
        return "操作失败,存在的问题:" . implode(" ", $this->errorArray);
    }

    public function register($name, $pw)
    {

        $this->checkUsername($name, "reg");
        $this->checkPassword($pw, "reg");

        if (empty($this->errorArray)) {
//验证成功   插入数据库
            return true;
        } else {
            return false;
        }

    }

    public function login($name, $pw)
    {
        $this->checkUsername($name, "login");
        $this->checkPassword($pw, "login");

        if (empty($this->errorArray)) {
//验证成功   开启session
            return true;
        } else {
            return false;
        }
    }


}