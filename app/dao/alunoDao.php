<?php

require_once "../app/dao/Dao.php";
require_once "../app/class/classAluno.php";

class AlunoDao extends Dao { // a classe AlunoDao se extendendo da classe pai DAO
    // inserindo dados do aluno

    public function insertAluno(ClassAluno $ClassAluno) {

        $sql = "INSERT INTO `aluno`(`aluno_nome`, `aluno_matricula`) VALUES (:nome,:matricula)";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(":nome", $ClassAluno->getNome());
        $insert->bindValue(":matricula", $ClassAluno->getMatricula());
        $insert->execute();
        if ($insert->rowCount()> 0){
             return true;
        }
    }

    // fazendo um select de todos os alunos
    public function listaAluno() {

        $sql = "SELECT * FROM `aluno`";
        $select = $this->con->prepare($sql);
        $select->execute();
        //logica do select
        $array = array();

        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            $aluno = new ClassAluno();

            $aluno->setId($row["aluno_id"]);
            $aluno->setNome($row["aluno_nome"]);
            $aluno->setMatricula($row["aluno_matricula"]);
            $array[] = $aluno;
        }
        return $array;
    }

    public function selecionarAluno($id){
        $sql = "SELECT * FROM `aluno` WHERE aluno_id = :id";
        
        $select = $this->con->prepare($sql);
        $select->bindValue(':id', (int)$id);       
        $select->execute();
        
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            $aluno = new ClassAluno();
            $aluno->setId($row["aluno_id"]);
            $aluno->setNome($row["aluno_nome"]);
            $aluno->setMatricula($row["aluno_matricula"]);
        }
        return $aluno;
    }
    // função para deletar um registro do aluno
    public function deleteAluno($id) {

        // $id do aluno 
        echo "O <b>ID: </b>" . $id . " do aluno foi deletado com sucesso";

        $sql = "DELETE FROM `aluno`WHERE aluno_id = '$id'";
        $delete = $this->con->prepare($sql);
        $delete->execute();
    }

    // função para atualizar o registro do aluno
    public function updateAluno(ClassAluno $ClassAluno) {
      
        $sql = "UPDATE `aluno` SET `aluno_nome`=:nome,`aluno_matricula`=:matricula WHERE aluno_id = :id";
        $update = $this->con->prepare($sql);
        
        $update->bindValue(':nome', $ClassAluno->getNome());
        $update->bindValue(':matricula', $ClassAluno->getMatricula());
        $update->bindValue(':id', $ClassAluno->getId());
        $update->execute();
        
        if ($update->rowCount()> 0){
            return true;
        }
           
    }

}

?>