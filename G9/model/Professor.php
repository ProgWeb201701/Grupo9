<?php

class Professor implements IActiveRecord
{
    	// =========================Variables Declaration========================= 
	private $nome;
	private $titulacao;
	private $instituicao;
        private $avaliador;
        private $id;
        private $areai;

        	// =========================Constructor=========================
	public function __construct($nome, $titulacao, $instituicao, $id, $areai){

		$this->nome = $nome;
		$this->titulacao = $titulacao;
		$this->instituicao=$instituicao;
                $this->id=$id;
                $this->areai=$areai;
	}

        	// =========================Sets=========================
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setTitulacao($titulacao){
		$this->titulacao = $titulacao;
	}
	public function setInstituicao($instituicao){
		$this->instituicao = $instituicao;
	}
        public function setId($id){
		$this->id = $id;
	}
        public function setAreai($areai){
		$this->areai = $areai;
	}
	// =========================Gets=========================
	public function getNome(){
		return $this->nome;
	}
	public function getTitulacao(){
		return $this->titulacao;
	}
	public function getInstituicao(){
		return $this->instituicao;
	}
        public function getId(){
		return $this->id;
	}
        public function getAreai(){
		return $this->areai;
	}

           // =========================Public Functions=========================
    public function delete() {
        
    }

    public function save() {
        $con = DBConnection::open();
        $con->stmt_init();
        $stmt = $con->prepare('INSERT INTO professor(nomprof, titprof, instprof, codareai) values(?, ?, ?, ?)');
        $stmt->bind_param($this->nome, $this->titulacao, $this->instituicao, $this->areai);
        $stmt->execute();
        $con->close();
    }

    public function update() {
        
    }

}
?>