<?php
include_once ('model/Avaliacao.php');

class Tcc extends ActiveRecord
{
   
	private $titulo;
	private $proposta;
	private $dataDefesa;
        private Avaliacao : $Avaliacao;


	public function __construct(){


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
}
?>