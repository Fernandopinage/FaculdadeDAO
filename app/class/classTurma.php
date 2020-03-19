<?php 


    class ClassTurma{


        private $id;
        private $sigla;
        private $turno;
        function getCurso() {
            return $this->curso;
        }

        function getDisciplina() {
            return $this->disciplina;
        }

        function getAluno() {
            return $this->aluno;
        }

        function setCurso($curso) {
            $this->curso = $curso;
        }

        function setDisciplina($disciplina) {
            $this->disciplina = $disciplina;
        }

        function setAluno($aluno) {
            $this->aluno = $aluno;
        }

                
        
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