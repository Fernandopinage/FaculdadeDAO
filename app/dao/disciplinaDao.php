<?php 

require_once "../app/dao/Dao.php";
require_once "../app/class/classDisciplina.php";

    class DisciplinaDao extends Dao{// a classe DisciplinaDao se extendendo da classe pai DAO

        // inserindo dados da disciplina
        public function insertDisciplina(ClassDisciplina $ClassDisciplina){

            $sql = "INSERT INTO `disciplina`(`disciplina_nome`, `disciplina_cargaH`) VALUES (:nome, :cargahora)";
            $insert = $this->con->prepare($sql);
            $insert->bindValue(":nome",$ClassDisciplina->getNome());
            $insert->bindValue(":cargahora",$ClassDisciplina->getCargahora());
            $insert->execute();
            echo "A disciplina <b>{$ClassDisciplina->getNome()}</b> com CH <b>{$ClassDisciplina->getCargahora()}</b> foi cadastrado com sucesso";
        }
        // fazendo um select de todas as disciplinas
        public function disciplinaLista(){

            $sql = "SELECT * FROM `disciplina`";
            $select = $this->con->prepare($sql);
            $select->execute();
            // logica do select
            while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {

                echo "<br><hr>";
                echo "<b>ID:</b> ".$row['disciplina_id'] = $linha['disciplina_id']."<br>";
                echo "<b>Nome:</b> ".$row['disciplina_nome'] = $linha['disciplina_nome']."<br>";
                echo "<b>Matricula:</b> ".$row['disciplina_cargaH'] = $linha['disciplina_cargaH']."<br>";
             
                echo "<br>";
            }
        }
        // função para deletar um registro da disciplina
        public function deleteDisciplina($id){
            // $id do aluno
            echo "O <b>ID: </b>".$id." da disciplina foi deletado com sucesso";

            $sql = "DELETE FROM `disciplina` WHERE disciplina_id = '$id'";
            $delete = $this->con->prepare($sql);
            $delete->execute();

        }
        // função para atualizar o registro das disciplinas
        public function updateDisciplina($ClassDisciplina,$id){
            // $id do aluno
            echo "O <b>ID: </b>".$id." da disciplina que foi atualizado";
            
            $sql = "UPDATE `disciplina` SET `disciplina_id`=:id,`disciplina_nome`=:nome,`disciplina_cargaH`=:cargaH WHERE disciplina_id = '$id'";
            $update = $this->con->prepare($sql);
            $update->bindValue(':id',$ClassDisciplina->getId());
            $update->bindValue(':nome',$ClassDisciplina->getNome());
            $update->bindValue(':cargaH',$ClassDisciplina->getCargahora());
            $update->execute();
            


        }

    }


?>