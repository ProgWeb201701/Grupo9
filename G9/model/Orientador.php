<?php

include_once 'model/Orientando.php';

class Orientador extends Professor implements IActiveRecord
{
    	// =========================Variables Declaration========================= 
    private $orientando;

	// =========================Constructor=========================
	public function __construct($nome, $titulacao, $instituicao, $orientando){
		parent::__construct();
		$this->orientando = $orientando;
	}

        	// =========================Sets=========================
	public function setOrientando($orientando){
		$this->orientando = $orientando;
	}
        	// =========================Gets=========================
	public function getOrientando(){
		return $this->orientando;
	}

    public function delete() {
        
    }

    public function save() {
        
    }

    public function update() {
        
    }

}
?>
