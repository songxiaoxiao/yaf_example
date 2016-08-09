<?php
/**
 * @name IndexController
 * @author ���Ų�ѩ\jc
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends Yaf\Controller_Abstract {

	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/Sample/Index/Index/Index/name/���Ų�ѩ\jc 的时候, 你就会发现不同
     */
	public function indexAction($name = "Stranger") {
		exit(1);
		//1. fetch query
		$get = $this->getRequest()->getQuery("get", "default value");
		$config = Yaf\Application::app()->getConfig();
//		echo "<pre>";
//		print_r($config);
//		echo $config->redis->cache->host;
//		echo $config->application->library;
		//2. fetch model
		$model = new SampleModel();

		//3. assign
		$this->getView()->assign("content", $model->selectSample());
		$this->getView()->assign("name", $name);

		//4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
//        return TRUE;
		// 引用library类库
		$host =  Tool\Http::getHost();
		var_dump($host);

		// 引用类库
//		var_dump(yaf\Loader::import('D:/work/Library/1.php'));

	}
	public  function readAction(){
		$model = new UserModel();
		$result = $model->selectUser();
		exit();
	}
}
