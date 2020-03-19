<?php

require_once "../app/dao/Dao.php";
require_once "../app/class/classTurma.php";
require_once "../app/class/classAluno.php";
require_once "../app/class/classCurso.php";
require_once "../app/class/classDisciplina.php";

Class TurmaDao extends Dao {// a classe TurmaDao se extendendo da classe pai DAO
    // inserindo dados da Turma

    public function insertTurma(ClassTurma $ClassTurma) {

        $sql = "INSERT INTO `turma`(`turma_sigla`, `turma_turno`, `turma_aluno_id`, `turma_curso_id`, `turma_disciplina_id`)
             VALUES (:sigla, :turno, :alunoID, :cursoID, :disciplinaID)";

        $insert = $this->con->prepare($sql);
        $insert->bindValue(':sigla', $ClassTurma->getSigla());
        $insert->bindValue(':turno', $ClassTurma->getTurno());
        $insert->bindValue(':alunoID', $ClassTurma->getAluno());
        $insert->bindValue(':cursoID', $ClassTurma->getCurso());
        $insert->bindValue(':disciplinaID', $ClassTurma->getDisciplina());
        $insert->execute();

      if ($insert->rowCount() > 0) {
            return true;
        }
    }

    // fazendo um select de todas as disciplinas
    public function listaTurma() {
        // logica do select
        $sql = "SELECT turma_id,turma_sigla,turma_turno,aluno_nome,curso_nome,disciplina_nome "
                . " FROM `turma` "
                . " LEFT JOIN aluno ON turma_aluno_id = aluno_id "
                . " LEFT JOIN curso ON turma_curso_id = curso_id "
                . " LEFT JOIN disciplina ON turma_disciplina_id = disciplina_id "
                . " ORDER BY 4,5";
        $select = $this->con->prepare($sql);
        $select->execute();
       // var_dump($sql);
        $array = array();
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            $turma = new ClassTurma();

            $turma->setId($row["turma_id"]);
            $turma->setSigla($row["turma_sigla"]);
            $turma->setTurno($row["turma_turno"]);
            $turma->setAluno($row["aluno_nome"]);
            $turma->setCurso($row["curso_nome"]);
            $turma->setDisciplina($row["disciplina_nome"]);
            
            $array[] = $turma;
        }
        return $array;
    }

}

?>