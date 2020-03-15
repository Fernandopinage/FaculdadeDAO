<?php 


Class ClassDisciplina{

    private $id;
    private $nome;
    private $cargaHora;


    public function setId($id){
        $this->id = $id;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
        
    public function setCargahora($cargaHora){
        $this->cargaHora = $cargaHora;
    }
    public function getId(){
       return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getCargahora(){
        return $this->cargaHora;
    }
}

?>