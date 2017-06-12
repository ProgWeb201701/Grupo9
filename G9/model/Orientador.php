<?php

class Orientador extends Professor
{
	private $orientando;
}

	public function __construct($nome, $titulacao, $instituicao, $orientando){
		parent::__construct();
		$this->orientando = $orientando;
	}

	public function setOrientando($orientando){
		$this->nome = $nome;
	}
	public function getOrientando(){
		return $this->orientando;
	}
?>
