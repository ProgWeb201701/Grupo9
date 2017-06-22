<?php

class Avaliacao implements IActiveRecord
{
    	// =========================Variables Declaration========================= 
	private $nota;
	private $parecer;
	private $arquivo;
        private $codavar;
        private $id;
	// =========================Constructor=========================
	public function __construct($nota, $parecer, $arquivo, $id){

		$this->nota = $nota;
		$this->proposta = $parecer;
		$this->dataDefesa=$arquivo;
                $this->id = $id;
	}

        	// =========================Sets=========================
	public function setNota($nota){
		$this->nota = $nota;
	}
	public function setParecer($parecer){
		$this->parecer = $parecer;
	}
	public function setArquivo($arquivo){
		$this->arquivo = $arquivo;
	}
        public function setId($id){
            $this->id = $id;
        }

        	// =========================Gets=========================
	public function getNota(){
		return $this->nota;
	}
	public function getParecer(){
		return $this->parecer;
	}
	public function getArquivo(){
		return $this->arquivo;
	}
        public function getId(){
            return $this->id;
        }

           // =========================Public Functions=========================
    public function delete() {
        
    }

    public function save() {
        $con = DBConnection::open();
        $con->stmt_init();
        $stmt = $con->prepare('insert into areainteresse(notava, parava, arqava, codavar) values(?, ?, ?, ?)');
        $stmt->bind_param($this->nota, $this->parecer, $this->arquivo, $this->codavar);
        $stmt->execute();
        $con->close();
    }

    public function update() {
        
    }

}
?>