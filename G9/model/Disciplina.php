<?php
class Disciplina
{
	// =========================Variables Declaration=========================    
	private $nome;
	private $turma;
	private $semestre;
	private $Coordenador;

	// =========================Constructor=========================
	public function __construct($nome, $turma, $semestre, $Coordenador)
	{
		$this->$nome = $nome;
		$this->$turma = $turma;
		$this->$semestre = $semestre;
		$this->$Coordenador = $Coordenador;
	}

    // =========================Sets=========================
    public function setNome($nome)
    {
    	$this->nome=$nome;
    }
    public function setTurma ($turma)
    {
    	$this->turma = $turma;
    }
    public function setSemestre ($semestre)
    {
    	$this->semestre = $semestre;
    }
    public function setCoordenador($Coordenador)
    {
    	$this->Coordenador = $Coordenador;
    }


    // =========================Gets=========================
    public function getNome()
    {
    	return $this->nome;	
    }
    public function getTurma()
    {
    	return $this->turma;
    }
    public function getSemestre()
    {
    	return $this->semestre;
    }
    public function getCoordenador()
    {
    	return $this->Coordenador;
    }


    // =========================Functions=========================
}


?>