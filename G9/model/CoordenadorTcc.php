<?php

class CoordenadorTcc extends Professor
{

}

	public function __construct($nome, $titulacao, $instituicao){
		parent::__construct();

	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setTitulacao($titulacao){
		$this->titulacao = $titulacao;
	}
	public function setInstituicao($instituicao){
		$this->instituicao = $instituicao;
	}

	public function getNome(){
		return $this->nome;
	}
	public function getTitulacao(){
		return $this->titulacao;
	}
	public function getInstituicao(){
		return $this->instituicao;
	}
?>