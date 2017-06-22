<?php
class Disciplina implements IActiveRecord
{
	// =========================Variables Declaration=========================    
	private $nome;
	private $turma;
	private $semestre;
	private $Coordenador;

	// =========================Constructor=========================
	public function __construct()
	{
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

    public function delete() {
        
    }

    public function save() {
        $con = DBConnection::open();
        $con->stmt_init();
        $stmt = $con->prepare('INSERT INTO disciplina(nomdis, turdis, semdis, codcoo, codtcc) values(?, ?, ?, ?)');
        $stmt->bind_param($this->nome, $this->turma, $this->semestre, $this->Coordenador);
        $stmt->execute();
        $con->close();
    }


    public function update() {
        
    }

    
}


?>