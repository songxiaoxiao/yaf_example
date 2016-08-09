<?php
/**
 * @name SampleModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author ���Ų�ѩ\jc
 */
class SampleModel {
    public function __construct() {
    }   
    
    public function selectSample() {
        return 'Hello World!';
    }

    public function insertSample($arrInfo) {
        return true;
    }
    public function selectDbSample(){
        $model = new Model('user');
        $result = $model->where(array('Host'=>'127.0.0.1'))->find(1);
        return $result;

    }
}
