<?php 

require_once "../app/dao/Dao.php";
require_once "../app/class/classTurma.php";
require_once "../app/class/classAluno.php";
require_once "../app/class/classCurso.php";
require_once "../app/class/classDisciplina.php";

    Class TurmaDao extends Dao{// a classe TurmaDao se extendendo da classe pai DAO
        // inserindo dados da Turma
        public function insertTurma($ClassTurma,$ClassAluno,$ClassCurso,$ClassDisciplina){

            $sql = "INSERT INTO `turma`(`turma_sigla`, `turma_turno`, `turma_aluno_id`, `turma_curso_id`, `turma_disciplina_id`)
             VALUES (:sigla, :turno, :alunoID, :cursoID, :disciplinaID)";
            
            $insert = $this->con->prepare($sql);
            $insert->bindValue(':sigla',$ClassTurma->getSigla());
            $insert->bindValue(':turno',$ClassTurma->getTurno());
            $insert->bindValue(':alunoID',$ClassAluno->getId());
            $insert->bindValue(':cursoID',$ClassCurso->getId());
            $insert->bindValue(':disciplinaID',$ClassDisciplina->getId());
            $insert->execute();
            
            echo "A turma <b>{$ClassTurma->getSigla()}</b> com Turno <b>{$ClassTurma->getTurno()}</b> foi cadastrado com sucesso";

        }
        // fazendo um select de todas as disciplinas
        public function listaTurna(){
            // logica do select
            $sql = "SELECT * FROM `turma`";
            $select = $this->con->prepare($sql);
            $select->execute();

            while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {

                echo "<br><hr>";
                echo "<b>Sigla Curso:</b> ".$row['turma_sigla'] = $linha['turma_sigla']."<br>";
                echo "<b>Turno:</b> ".$row['turma_turno'] = $linha['turma_turno']."<br>";
                echo "<b>ID Turma:</b> ".$row['turma_id'] = $linha['turma_id']."<br>";
                echo "<b>ID Aluno:</b> ".$row['turma_aluno_id'] = $linha['turma_aluno_id']."<br>";
                echo "<b>ID Curso:</b> ".$row['turma_curso_id'] = $linha['turma_curso_id']."<br>";
                echo "<b>ID Disciplina:</b> ".$row['turma_disciplina_id'] = $linha['turma_disciplina_id']."<br>";
                echo "<br>";
            }

        }

        


    }

?>