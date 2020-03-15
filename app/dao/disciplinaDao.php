<?php 

require_once "../app/dao/Dao.php";
require_once "../app/class/classDisciplina.php";

    class DisciplinaDao extends Dao{


        public function insertDisciplina(ClassDisciplina $ClassDisciplina){

           

            $sql = "INSERT INTO `disciplina`(`disciplina_nome`, `disciplina_cargaH`) VALUES (:nome, :cargahora)";
            $insert = $this->con->prepare($sql);
            $insert->bindValue(":nome",$ClassDisciplina->getNome());
            $insert->bindValue(":cargahora",$ClassDisciplina->getCargahora());
            $insert->execute();
            
        }

        public function disciplinaLista(){

            $sql = "SELECT * FROM `disciplina`";
            $select = $this->con->prepare($sql);
            $select->execute();
            while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {

                echo "<br><hr>";
                echo "<b>ID:</b> ".$row['disciplina_id'] = $linha['disciplina_id']."<br>";
                echo "<b>Nome:</b> ".$row['disciplina_nome'] = $linha['disciplina_nome']."<br>";
                echo "<b>Matricula:</b> ".$row['disciplina_cargaH'] = $linha['disciplina_cargaH']."<br>";
             
                echo "<br>";
            }
        }

        public function deleteDisciplina($id){

            echo $id;

            $sql = "DELETE FROM `disciplina` WHERE disciplina_id = '$id'";
            $delete = $this->con->prepare($sql);
            $delete->execute();

        }
        public function updateDisciplina($ClassDisciplina,$id){
            echo $id;

           

            $sql = "UPDATE `disciplina` SET `disciplina_id`=:id,`disciplina_nome`=:nome,`disciplina_cargaH`=:cargaH WHERE disciplina_id = '$id'";
            $update = $this->con->prepare($sql);
            $update->bindValue(':id',$ClassDisciplina->getId());
            $update->bindValue(':nome',$ClassDisciplina->getNome());
            $update->bindValue(':cargaH',$ClassDisciplina->getCargahora());
            $update->execute();
            


        }

    }


?>