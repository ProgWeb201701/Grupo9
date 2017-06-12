<?php
Class Avaliador
{
	// =========================Variables Declaration========================= 
	private $Avaliacao;

	// =========================Constructor=========================
	public function __construct($nome, $titulacao, $instituicao, $Avaliacao)
	{
		parent::__construct();
		$this->Avaliacao = $Avaliacao;
	}

	// =========================Sets=========================
	public function setAvaliacao($Avaliacao)
	{
		$this->Avaliacao = $Avaliacao;
	}

	// =========================Gets=========================
	public function getAvaliacao()
	{
		return $this->Avaliacao;
	}

}

?>