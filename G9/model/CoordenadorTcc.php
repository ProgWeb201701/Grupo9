<?php

class CoordenadorTcc implements IActiveRecord
{
	// =========================Variables Declaration========================= 
        private $nome;
        private $titulacao;
        private $instituicao;
        private $id;

	// =========================Constructor=========================
	public function __construct(){


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

    public function delete() {
        
    }

    public function save() {
        $con = DBConnection::open();
        $con->stmt_init();
        $stmt = $con->prepare('INSERT INTO coordenadortcc(nomcoo, titcoo, inscoo) values(?, ?, ?)');
        $stmt->bind_param($this->nome, $this->titulacao, $this->instituicao);
        $stmt->execute();
        $con->close();
    }


    public function update() {
        
    }

}
?>