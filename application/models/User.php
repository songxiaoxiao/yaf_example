<?php
/**
 * Created by PhpStorm.
 * User: winter
 * version: 2016/8/9 17:35
 */
// extends mBase
class UserModel{
    private $db;
    private function init(){
        if(is_null($this->db)){
            $this->db = new mBase('user');
        }
    }
    public function selectUser(){
        $this->init();
        $result = $this->db->select();
        echo $this->db->getlastsql();
        yaf\Loader::import('D:/work/Library/function.php');
        $ip = get_client_ip();
        echo $ip;
        var_dump($result);
        return $result;
    }
}