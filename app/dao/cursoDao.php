<?php
error_reporting(E_ALL);
require_once "../app/dao/Dao.php";
require_once "../app/class/classCurso.php";

class CursoDao extends Dao { // a classe CursoDao se extendendo da classe pai DAO
    // inserindo dados do curso

    public function insertCurso(ClassCurso $ClassCurso) {

        $sql = "INSERT INTO `curso`(`curso_nome`) VALUES (:nome)";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(':nome', $ClassCurso->getNome());
        $insert->execute();
        if ($insert->rowCount() > 0) {
            return true;
        }
    }

    // fazendo um select de todos os cursos
    public function listaCurso() {

        $sql = "SELECT * FROM `curso`";
        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            $curso = new ClassCurso();
            $curso->setId($row["curso_id"]);
            $curso->setNome($row["curso_nome"]);       
            $array[] = $curso;
        }
        return $array;
    }

    // função para deletar um registro do curso
    public function deleteCurso($id) {
      
        $sql = "DELETE FROM `curso`WHERE curso_id = '$id'";
        $delete = $this->con->prepare($sql);
        $delete->execute();
    }

    // função para atualizar o registro do aluno
    public function updateCurso(ClassCurso $ClassCurso) {
        
        $sql = "UPDATE `curso` SET `curso_id`=:id,`curso_nome`=:nome WHERE curso_id = :id";
        $update = $this->con->prepare($sql);
        $update->bindValue(':id', $ClassCurso->getId());
        $update->bindValue(':nome', $ClassCurso->getNome());
        $update->execute();
                
        if ($update->rowCount()> 0){
            return true;
        }
    }
    
    public function selecionarCurso($id){
        $sql = "SELECT * FROM `curso` WHERE curso_id = :id";
        
        $select = $this->con->prepare($sql);
        $select->bindValue(':id', (int)$id);       
        $select->execute();
        
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            $curso = new ClassCurso();
            $curso->setId($row["curso_id"]);
            $curso->setNome($row["curso_nome"]);     
        }
        return $curso;
    }

}

?>