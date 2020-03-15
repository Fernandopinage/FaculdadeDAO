<?php 
    require_once "../app/dao/Dao.php";
    require_once "../app/class/classCurso.php";
    class CursoDao extends Dao{


        public function insertCurso(ClassCurso $ClassCurso){
            
            $sql = "INSERT INTO `curso`(`curso_nome`) VALUES (:nome)";
            $insert = $this->con->prepare($sql);
            $insert->bindValue(':nome',$ClassCurso->getNome());
            $insert->execute();
        }
        public function listaCurso(){

            $sql = "SELECT * FROM `curso`";
            $select = $this->con->prepare($sql);
            $select->execute();
            while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {

            echo "<br><hr>";
            echo "<b>ID:</b> ".$row['curso_id'] = $linha['curso_id']."<br>";
            echo "<b>Nome:</b> ".$row['curso_nome'] = $linha['curso_nome']."<br>";
           
         
            echo "<br>";
            }
        }

        public function deleteCurso($id){
            echo $id;
            
            $sql ="DELETE FROM `curso`WHERE curso_id = '$id'";
            $delete = $this->con->prepare($sql);
            $delete->execute();
        }
        public function updateAluno(ClassCurso $ClassCurso,$id){

            echo $id;

            $sql = "UPDATE `curso` SET `curso_id`=:id,`curso_nome`=:nome WHERE curso_id = '$id'";
            $update = $this->con->prepare($sql);
            $update->bindValue(':id',$ClassCurso->getId());
            $update->bindValue(':nome',$ClassCurso->getNome());
            $update->execute();


        }

    }

?>