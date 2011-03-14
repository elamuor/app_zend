<?php
class IndexController extends Zend_Controller_Action {
	
	public function indexAction() {
		$projetoMapper	= new ProjetoMapper(  );
		$projeto		= $projetoMapper->listarPorId( 1 );
		$this->view->projeto	= $projeto;
	}	
	
	public function listagemProjetoAction() {
		$projetoMapper	= new ProjetoMapper();
		$arProjetos		= $projetoMapper->listarTodos();
		$this->view->arProjetos	= $arProjetos;
	}
	
	
	public function cadastrarProjetoAction(){
		$projeto	= new Projeto();
		$projeto->setNomeProjeto( 'Projeto do Felipe' );
		$projetoMapper	= new ProjetoMapper();
		Zend_Debug::dump( $projetoMapper->salvar( $projeto ) );
		exit; 
	}
}