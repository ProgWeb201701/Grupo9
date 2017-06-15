<?php
 	
 	class Orientando
 	{

 	private $nome;
 	private $curso;
 	private $matricula;
 	

    public function __construct($nome, $curso, $matricula)
    {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->matricula = $matricula;
    }

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

    public function getNome(){
    	return $this->nome;
    }
    public function getCurso(){
    	return $this->curso;
    }
    public function getMatricula(){
    	return $this->matricula;
    }
        }


 ?>