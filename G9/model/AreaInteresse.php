<?php

class AreaInteresse implements IActiveRecord
{
    	// =========================Variables Declaration========================= 
	private $nome;
        private $id;

        	// =========================Constructor=========================
	public function __construct($nome, $id){
		$this->nome = $nome;
                $this->id = $id;
	}

        	// =========================Sets=========================
	public function setNome($nome){
		$this->nome = $nome;
	}
        public function setId($id){
            $this->id = $id;
        }           

        	// =========================Gets=========================
	public function getNome(){
		return $this->nome;
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
        $stmt = $con->prepare('insert into areainteresse(nemareai) values(?)');
        $stmt->bind_param($this->nome);
        $stmt->execute();
        $con->close();
    }

    public function update() {
        
    }

}
?>