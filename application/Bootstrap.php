<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
	
	/**
	 * Inicia o componente Zend_Loader_Autoloader
	 * Componente utilizado para importação automática de classes utilizadas
	 * @return void
	 */
	public function _initAutoLoader(){
		$autoloader = Zend_Loader_Autoloader::getInstance();
		$autoloader->setFallbackAutoloader(true);
	}
}