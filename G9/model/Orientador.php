<?php

include_once 'model/Orientando.php';

class Orientador extends Professor
{
    private $orientando;


	public function __construct($nome, $titulacao, $instituicao, $orientando){
		parent::__construct();
		$this->orientando = $orientando;
	}

	public function setOrientando($orientando){
		$this->orientando = $orientando;
	}
	public function getOrientando(){
		return $this->orientando;
	}
}
?>
