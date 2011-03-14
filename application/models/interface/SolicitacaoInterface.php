<?php
/**
 * Interface da solicitacao
 * @author Arthur Cláudio de Almeida Pereira
 *
 */
interface SolicitacaoInterface {
	
	
	public function calcularPeso();
	public function calcularCronograma();
	public function calcularValorPrevisto();
	public function calcularValorOrcado();
	public function calcularIDC();
	public function calcularIDE();
}
