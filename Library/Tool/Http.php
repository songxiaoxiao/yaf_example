<?php
/**
 * Created by PhpStorm.
 * User: winter
 * version: 2016/8/9 16:16
 */
namespace Tool;
class Http{
    public static function getHost(){
        return $_SERVER['HTTP_HOST'];
    }
}