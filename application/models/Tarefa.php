<?php
/**
 * Classe de domínio Tarefa
 * @author Arthur
 *
 */
class Tarefa {
	
	protected $_nomeTarefa;
	
	/**
	 * 
	 * @var DateTime
	 */
	protected $_dataIncio;
	
	/**
	 * @return the $_nomeTarefa
	 */
	public function getNomeTarefa() {
		return $this->_nomeTarefa;
	}

	/**
	 * @return the $_dataIncio
	 */
	public function getDataInicio() {
		return $this->_dataIncio;
	}

	/**
	 * @param $_nomeTarefa the $_nomeTarefa to set
	 */
	public function setNomeTarefa($_nomeTarefa) {
		$this->_nomeTarefa = $_nomeTarefa;
	}

	/**
	 * @param $_dataIncio the $_dataIncio to set
	 */
	public function setDataInicio(DateTime $_dataIncio) {
		$this->_dataIncio = $_dataIncio;
	}

	
	
	
}
