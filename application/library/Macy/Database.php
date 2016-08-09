<?php
namespace Macy;
use Macy\Database\Driver;
use Macy\Database\Driver\Mysql;
class Database extends Driver{

    static private  $instance   =  array();     //  数据库连接实例
    static private  $_instance  =  null;   //  当前数据库连接实例

    /**
     * 取得数据库实例
     * @param $config
     * @return null
     */
    public function getInstance($config){
        $md5    =   md5(serialize($config));
        $options    =   self::parseConfig($config);
        self::$instance[$md5]   =   new Mysql($options);
        self::$_instance    =   self::$instance[$md5];
        return self::$_instance;
    }

    /**
     * 数据库连接参数解析
     * @static
     * @access private
     * @param mixed $config
     * @return array
     */
    static private function parseConfig($config){
        if(!empty($config)){
            $config = array (
                'type'          =>  $config->type,
                'username'      =>  $config->username,
                'password'      =>  $config->password,
                'hostname'      =>  $config->hostname,
                'hostport'      =>  isset($config->hostport) ? $config->hostport : "3306",
                'database'      =>  $config->database,
                'charset'       =>  isset($config->charset) ? $config->charset : 'utf8'
            );
        }
        return $config;
    }
}