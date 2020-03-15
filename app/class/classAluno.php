<?php 

    class ClassAluno{

        private $id = null;
        private $nome = null;
        private $matricula = null;
        
        
        public function setId($id){
            $this->id = $id;
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }
        public function getId(){
            return $this->id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        public function getMatricula(){
            return $this->matricula;
        }
        
        
        
    }
    
    

?>