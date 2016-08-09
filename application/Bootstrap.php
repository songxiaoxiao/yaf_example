<?php
/**
 * @name Bootstrap
 * @author ���Ų�ѩ\jc
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf\Bootstrap_Abstract{

    public function _initConfig() {
		//把配置保存起来
		$arrConfig = Yaf\Application::app()->getConfig();
		Yaf\Registry::set('config', $arrConfig);
	}
	/**
	 * 导入所需文件
	 */
	public function _initDatebase(){
//		Yaf\Loader::import(APPLICATION_PATH . '/library/function.php');      //系统全局方法
//		Yaf\Loader::import(APPLICATION_PATH . '/library/Tools.php');         //工具类
//		Yaf\Loader::import(APPLICATION_PATH . '/library/Validate.php');      //验证方法
//		Yaf\Loader::import(APPLICATION_PATH . '/library/Log.php');           //日志类
//		Yaf\Loader::import(APPLICATION_PATH . '/library/Adapter.php');       //Smarty适配器，使Smarty与Yaf之间能进行适配
//		Yaf\Loader::import(APPLICATION_PATH . '/library/Service.php');       //系统service类，所有Service都继承该类
	}
	public function _initPlugin(Yaf\Dispatcher $dispatcher) {
		//注册一个插件
		$objSamplePlugin = new SamplePlugin();
		$dispatcher->registerPlugin($objSamplePlugin);
	}

	public function _initRoute(Yaf\Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
	}
	
	public function _initView(Yaf\Dispatcher $dispatcher){
		//在这里注册自己的view控制器，例如smarty,firekylin
	}
}
