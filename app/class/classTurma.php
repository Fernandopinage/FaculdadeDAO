<?php 


    class ClassTurma{


        private $id;
        private $sigla;
        private $turno;

        public function setId($id){
            $this->id = $id;
        }

        
        
        public function setSigla($sigla){
            $this->sigla = $sigla;
            
        }
        
        public function setTurno($turno){
            $this->turno = $turno;
            
        }
        
        public function getSigla(){
            return $this->sigla;
            
        }
        
        public function getTurno(){
            return $this->turno;
            
        }
        
        public function getId(){
           return $this->id;
        }
    }


?>