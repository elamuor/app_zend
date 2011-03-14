<?php
/**
 * Classe de gateway com a tabela tb_tarefa
 * @author Arthur
 *
 */
class TarefaGatewayDb	extends Zend_Db_Table_Abstract {
	
	
	protected $_name	= 'tb_tarefa';
	protected $_primary	= 'id_tarefa';
	
	protected $_referenceMap	= array('Projeto'	=>	array( 'columns'		=>	'id_solicitacao'
															 , 'refTableClass'	=>	'SolicitacaoGatewayDb'
															 , 'refColumns'		=>	'id_solicitacao'
															 ));
	
}