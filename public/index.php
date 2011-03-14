<?php
// Define o caminho para a pasta application
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define o ambiente da aplica��o
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'desenvolvimento'));

// Garanto que a library/ est� no include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library')
    ,realpath(APPLICATION_PATH . '/models/')  
    ,realpath(APPLICATION_PATH . '/models/gateway/')  
    ,realpath(APPLICATION_PATH . '/models/mapper/')  
    ,realpath(APPLICATION_PATH . '/models/interface/')  
    ,realpath(APPLICATION_PATH . '/models/orm') 
    ,get_include_path()
)));

/**
 *  Zend_Application 
 *  Inicio o framework Zend a partir do Zend_Application
 */
require_once 'Zend/Application.php';

// Crio o Zend_Application, chamo o bootstrap, e rodo a aplica��o
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/app_zend.ini'
);
$application->bootstrap()
            ->run();

