<?php
class Projeto {
	
	
	protected $_idProjeto;
	
	/**
	 * 
	 * @var ArrayObject
	 */
	protected $_tarefas;
	
	/**
	 * 
	 * @var string
	 */
	protected $_nomeProjeto;
	/**
	 * 
	 * @var DateTime
	 */
	protected $_dataCadastro;
	
	
	
	/**
	 * @return the $_idProjeto
	 */
	public function getIdProjeto() {
		return $this->_idProjeto;
	}

	/**
	 * @param $_idProjeto the $_idProjeto to set
	 */
	public function setIdProjeto($_idProjeto) {
		$this->_idProjeto = $_idProjeto;
	}

	/**
	 * @return ArrayObject $_tarefas
	 */
	public function getTarefas() {
		return $this->_tarefas;
	}

	/**
	 * @return the $_nomeProjeto
	 */
	public function getNomeProjeto() {
		return $this->_nomeProjeto;
	}

	/**
	 * @return the $_dataCadastro
	 */
	public function getDataCadastro() {
		return $this->_dataCadastro;
	}

	/**
	 * @param $_tarefas the $_tarefas to set
	 */
	public function setTarefas($_tarefas) {
		$this->_tarefas = $_tarefas;
	}

	/**
	 * @param $_nomeProjeto the $_nomeProjeto to set
	 */
	public function setNomeProjeto($_nomeProjeto) {
		$this->_nomeProjeto = $_nomeProjeto;
	}

	/**
	 * @param $_dataCadastro the $_dataCadastro to set
	 */
	public function setDataCadastro(DateTime $_dataCadastro) {
		$this->_dataCadastro = $_dataCadastro;
	}
	
	public function calcularCronograma(){}
	public function calcularPeso() {}
	public function calcularValorPrevisto() {}
	public function calcularValorOrcado() {}
	public function calcularIDC() {}
	public function calcularIDE() {}
	
}