<?php

require_once "../app/dao/Dao.php";
require_once "../app/class/classDisciplina.php";

class DisciplinaDao extends Dao {// a classe DisciplinaDao se extendendo da classe pai DAO
    // inserindo dados da disciplina

    public function insertDisciplina(ClassDisciplina $ClassDisciplina) {

        $sql = "INSERT INTO `disciplina`(`disciplina_nome`, `disciplina_cargaH`) VALUES (:nome, :cargahora)";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(":nome", $ClassDisciplina->getNome());
        $insert->bindValue(":cargahora", $ClassDisciplina->getCargahora());
        $insert->execute();
        if ($insert->rowCount() > 0) {
            return true;
        }
    }

    // fazendo um select de todas as disciplinas
    public function disciplinaLista() {

        $sql = "SELECT * FROM `disciplina`";
        $select = $this->con->prepare($sql);
        $select->execute();
        
        $array = array();
        
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $disciplina = new ClassDisciplina();

            $disciplina->setId($row["disciplina_id"]);
            $disciplina->setNome($row["disciplina_nome"]);
            $disciplina->setCargahora($row["disciplina_cargaH"]);
            $array[] = $disciplina;
        }
        return $array;
    }

    // função para deletar um registro da disciplina
    public function deleteDisciplina($id) {
        $sql = "DELETE FROM `disciplina` WHERE disciplina_id = '$id'";
        $delete = $this->con->prepare($sql);
        $delete->execute();
    }

    // função para atualizar o registro das disciplinas
    public function updateDisciplina(ClassDisciplina $ClassDisciplina) {
     
        $sql = "UPDATE `disciplina` SET `disciplina_id`=:id,`disciplina_nome`=:nome,`disciplina_cargaH`=:cargaH WHERE disciplina_id = :id";
        $update = $this->con->prepare($sql);
        $update->bindValue(':id', $ClassDisciplina->getId());
        $update->bindValue(':nome', $ClassDisciplina->getNome());
        $update->bindValue(':cargaH', $ClassDisciplina->getCargahora());
        $update->execute();
        
         if ($update->rowCount()> 0){
            return true;
        }
    }
    
    public function selecionarDisciplina($id){
        $sql = "SELECT * FROM `disciplina` WHERE disciplina_id = :id";
        
        $select = $this->con->prepare($sql);
        $select->bindValue(':id', (int)$id);       
        $select->execute();
        
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            $disciplina = new ClassDisciplina();
            $disciplina->setId($row["disciplina_id"]);
            $disciplina->setNome($row["disciplina_nome"]);
            $disciplina->setCargahora($row["disciplina_cargaH"]);
        }
        return $disciplina;
    }
    

}

?>