<?php

class Avaliacao
{
	private $nota;
	private $parecer;
	private $arquivo;

	public function __construct($nota, $parecer, $arquivo){

		$this->nota = $nota;
		$this->proposta = $parecer;
		$this->dataDefesa=$arquivo;
	}

	public function setNota($nota){
		$this->nota = $nota;
	}
	public function setParecer($parecer){
		$this->parecer = $parecer;
	}
	public function setArquivo($arquivo){
		$this->arquivo = $arquivo;
	}

	public function getNota(){
		return $this->nota;
	}
	public function getParecer(){
		return $this->parecer;
	}
	public function getArquivo(){
		return $this->arquivo;
	}
}
?>