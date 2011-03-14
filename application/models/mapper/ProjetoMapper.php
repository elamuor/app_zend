<?php
/**
 * Responsável por mapear os dados da tabela para o objeto Projeto
 * @author Arthur Cláudio de Almeida Pereira
 * @todo CRIAR INTERFACE MAPPER
 */
class ProjetoMapper {
	
	protected $_dbGateway;
	
	public function __construct( ) {
		$this->_dbGateway	= new SolicitacaoGatewayDb();
	}
	
	/**
	 * @param Projeto $projeto
	 * @return int chave primária gerada
	 */
	public function salvar( Projeto $projeto ) {
		$dataAtual		= new DateTime('now');
		$arDadosProjeto	= array( 'st_nome_solicitacao' 	=> $projeto->getNomeProjeto() 
							   , 'dt_cadastro'			=> $dataAtual->format( 'Y-m-d H:i:s' ) );
		
		$newRow	= $this->_dbGateway->createRow( $arDadosProjeto );
		
		return (int) $newRow->save();
	}
	
	/**
	 * Atualiza um projeto
	 * @param Projeto $projeto
	 */
	public function atualizar( Projeto $projeto ) {
		$idProjeto	= $projeto->getIdProjeto();
		
		if ( empty( $idProjeto )  ) {
			throw new InvalidArgumentException( 'Informe o id do projeto para atualizar' );
		}
		
		$arDadosProjeto	= array( 'st_nome_solicitacao' => $projeto->getNomeProjeto() );
		return (int) $this->_dbGateway->update( $arDadosProjeto, 'id_solicitacao = '. $idProjeto );
	}
	
	/**
	 * Lista um projeto por seu ID
	 * @todo IMPLEMENTAR MÉTODO NA INTERFACE MAPPER
	 * @param $idProjeto
	 * @return Projeto
	 */
	public function listarPorId( $idProjeto ) {
		$row		= $this->_dbGateway->find( $idProjeto )->current();
		$projeto	= $this->_carregaProjeto( $row );
		return $projeto;
	}	
	
	/**
	 * @todo IMPLEMENTAR MÉTODO NA INTERFACE MAPPER
	 * @return ArrayObject
	 */
	public function listarTodos() {
		$rowset	= $this->_dbGateway->fetchAll();
		$arProjetos	= new ArrayObject();
		if( $rowset->count() > 0 ) {
			foreach ( $rowset as $row ) {
				$arProjetos->append( $this->_carregaProjeto( $row ) );
			}
		}
		return $arProjetos;
	}
	
	/**
	 * Carrega um projeto
	 * @param Zend_Db_Table_Row $row
	 * @return Projeto
	 */
	private function _carregaProjeto(Zend_Db_Table_Row $row) {
		$projeto	= new Projeto();
		$projeto->setNomeProjeto( $row->st_nome_solicitacao );
		$projeto->setDataCadastro( new DateTime( $row->dt_cadastro ) );
		$rowsetTarefas	= $row->findDependentRowset(new TarefaGatewayDb(), 'Projeto');
		$arTarefas		= new ArrayObject();
		if( $rowsetTarefas->count() > 0  ) {
			foreach ( $rowsetTarefas as $rowTarefa ) {
				$tarefa	= new Tarefa();
				$tarefa->setNomeTarefa( $rowTarefa->st_nome_tarefa );
				$tarefa->setDataInicio( new DateTime( $rowTarefa->dt_inicio_tarefa ) );
				$arTarefas->append( $tarefa );
			}
		}
		$projeto->setTarefas( $arTarefas );
		
		return $projeto;
	}
	
	
}