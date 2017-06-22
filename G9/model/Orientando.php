<?php
 	
 class Orientando implements IActiveRecord
 {
	// =========================Variables Declaration========================= 
 	private $nome;
 	private $curso;
 	private $matricula;
 	
	// =========================Constructor=========================
    public function __construct($nome, $curso, $matricula)
    {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->matricula = $matricula;
    }

    	// =========================Sets=========================
    public function setNome($nome)
    {
    	$this->nome = $nome;
    }
    public function setCurso($curso)
    {
    	$this->curso=$curso;
    }
    public function setMatricula($matricula)
    {
    	$this->matricula=$matricula;
    }

    	// =========================Gets=========================
    public function getNome(){
    	return $this->nome;
    }
    public function getCurso(){
    	return $this->curso;
    }
    public function getMatricula(){
    	return $this->matricula;
    }

    public function delete() {
        
    }

    public function save() {
        
    }

    public function update() {
        
    }

}


 ?>