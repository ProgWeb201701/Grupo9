<?php

class Tcc
{
	private $titulo;
	private $proposta;
	private $dataDefesa;
}

	public function __construct($titulo, $proposta, $dataDefesa){

		$this->titulo = $titulo;
		$this->proposta = $proposta;
		$this->dataDefesa=$dataDefesa;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	public function setProposta($proposta){
		$this->proposta = $proposta;
	}
	public function setDataDefesa($dataDefesa){
		$this->dataDefesa = $dataDefesa;
	}

	public function getTitulo(){
		return $this->titulo;
	}
	public function getProposta(){
		return $this->proposta;
	}
	public function getDataDefesa(){
		return $this->dataDefesa;
	}
?>