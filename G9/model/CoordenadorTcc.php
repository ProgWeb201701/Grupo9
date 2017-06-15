<?php

class CoordenadorTcc
{

        private $nome;
        private $titulacao;
        private $instituicao;


	public function __construct($nome, $titulacao, $instituicao){
		$this->nome=$nome;
                $this->titulacao=$titulacao;
                $this->instituicao=$instituicao;

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
}
?>