<?php 
    require_once "../app/dao/Dao.php";
    require_once "../app/class/classCurso.php";
    class CursoDao extends Dao{ // a classe CursoDao se extendendo da classe pai DAO

         // inserindo dados do curso
        public function insertCurso(ClassCurso $ClassCurso){
            
            $sql = "INSERT INTO `curso`(`curso_nome`) VALUES (:nome)";
            $insert = $this->con->prepare($sql);
            $insert->bindValue(':nome',$ClassCurso->getNome());
            $insert->execute();
            echo "O Curso <b>{$ClassCurso->getNome()}</b> foi cadastrado com sucesso";
        }
        // fazendo um select de todos os cursos
        public function listaCurso(){

            $sql = "SELECT * FROM `curso`";
            $select = $this->con->prepare($sql);
            $select->execute();
            //logica do select
            while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {

            echo "<br><hr>";
            echo "<b>ID:</b> ".$row['curso_id'] = $linha['curso_id']."<br>";
            echo "<b>Nome:</b> ".$row['curso_nome'] = $linha['curso_nome']."<br>";
           
         
            echo "<br>";
            }
        }
        // função para deletar um registro do curso
        public function deleteCurso($id){
            // $id do aluno 
            echo "O <b>ID: </b>".$id." do curso foi deletado com sucesso";
            
            $sql ="DELETE FROM `curso`WHERE curso_id = '$id'";
            $delete = $this->con->prepare($sql);
            $delete->execute();
        }
        // função para atualizar o registro do aluno
        public function updateCurso(ClassCurso $ClassCurso,$id){
            // $id do aluno 
            echo "O <b>ID: </b>".$id." do curso que foi atualizado";

            $sql = "UPDATE `curso` SET `curso_id`=:id,`curso_nome`=:nome WHERE curso_id = '$id'";
            $update = $this->con->prepare($sql);
            $update->bindValue(':id',$ClassCurso->getId());
            $update->bindValue(':nome',$ClassCurso->getNome());
            $update->execute();
        }

    }

?>