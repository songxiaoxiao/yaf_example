<?php
/**
 * @Author:	  hutong
 * @DateTime:	2016-08-05 17:08:19
 * @Description: Description
 */

class cBase extends Yaf\Controller_Abstract{
	public function init()
	{
		$this->setViewPath(Yaf\Registry::get('config')->application->view->path.'/'.$this->getModuleName());
	}
}