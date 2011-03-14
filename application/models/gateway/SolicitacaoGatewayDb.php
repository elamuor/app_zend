<?php
class SolicitacaoGatewayDb	extends Zend_Db_Table_Abstract {
	
	protected $_name	= 'tb_solicitacao';
	protected $_primary	= 'id_solicitacao';
	
	protected $_dependentTables	= array('TarefasORM');
	
}