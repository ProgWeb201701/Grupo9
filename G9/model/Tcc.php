<?php
include_once ('model/Avaliacao.php');

class Tcc implements IActiveRecord
{
   	// =========================Variables Declaration========================= 
	private $titulo;
	private $proposta;
	private $dataDefesa;
        private $Avaliacao;
        private $id;
        private $orientando;
        private $disciplina;


        	// =========================Constructor=========================
	public function __construct(){


	}

        	// =========================Sets=========================
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	public function setProposta($proposta){
		$this->proposta = $proposta;
	}
	public function setDataDefesa($dataDefesa){
		$this->dataDefesa = $dataDefesa;
	}
        public function setId($id){
            $this->id = $id;
        }
        public function setOrientando($orientando){
            $this->orientando = $orientando;
        }
        public function setDisciplina($disciplina){
            $this->disciplina = $disciplina;
        }
	// =========================Gets=========================
	public function getTitulo(){
		return $this->titulo;
	}
	public function getProposta(){
		return $this->proposta;
	}
	public function getDataDefesa(){
		return $this->dataDefesa;
	}
        public function getId(){
		return $this->id;
	}
        public function getOrientando(){
		return $this->orientando;
	}
        public function getDisciplina(){
		return $this->disciplina;
	}

    public function delete() {
        
    }

    public function save() {
        $con = DBConnection::open();
        $con->stmt_init();
        $stmt = $con->prepare('INSERT INTO tcc(tittcc, protcc, dtdeftcc, codava, codori, coddis) values(?, ?, ?, ?, ?, ?)');
        $stmt->bind_param($this->titulo, $this->proposta, $this->dataDefesa, $this->Avaliacao, $this->orientando, $this->disciplina);
        $stmt->execute();
        $con->close();
    }

    public function update() {
        
    }

}
?>