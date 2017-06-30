<?php
Class Avaliador
{
	// =========================Variables Declaration========================= 
	private $Avaliacao;
        private $nivel;
	// =========================Constructor=========================
	public function __construct($nome, $titulacao, $instituicao, $Avaliacao)
	{
		parent::__construct();
		$this->Avaliacao = $Avaliacao;
                $this->nivel = 4;
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