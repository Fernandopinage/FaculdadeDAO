<?php 

require_once "../app/dao/Dao.php";
require_once "../app/class/classAluno.php";
    class AlunoDao extends Dao{ // a classe AlunoDao se extendendo da classe pai DAO

        // inserindo dados do aluno
        public function insertAluno(ClassAluno $ClassAluno){

            $sql ="INSERT INTO `aluno`(`aluno_nome`, `aluno_matricula`) VALUES (:nome,:matricula)";
            $insert = $this->con->prepare($sql);
            $insert->bindValue(":nome", $ClassAluno->getNome());
            $insert->bindValue(":matricula",$ClassAluno->getMatricula());
            $insert->execute();

            echo "O aluno <b>{$ClassAluno->getNome()}</b> com sua matricula <b>{$ClassAluno->getMatricula()}</b> foi cadastrado com sucesso";
        }

        // fazendo um select de todos os alunos
        public function listaAluno(){

            $sql = "SELECT * FROM `aluno`";
            $select = $this->con->prepare($sql);
            $select->execute();
            //logica do select
            while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {

            echo "<br><hr>";
            echo "<b>ID:</b> ".$row['aluno_id'] = $linha['aluno_id']."<br>";
            echo "<b>Nome:</b> ".$row['aluno_nome'] = $linha['aluno_nome']."<br>";
            echo "<b>Matricula:</b> ".$row['aluno_matricula'] = $linha['aluno_matricula']."<br>";
         
            echo "<br>";

            }

        }
        // função para deletar um registro do aluno
        public function deleteAluno($id){

            // $id do aluno 
            echo "O <b>ID: </b>".$id." do aluno foi deletado com sucesso";
            
            $sql ="DELETE FROM `aluno`WHERE aluno_id = '$id'";
            $delete = $this->con->prepare($sql);
            $delete->execute();
            
        }
        // função para atualizar o registro do aluno
        public function updateAluno(ClassAluno $ClassAluno,$id){
            //$id do aluno
            echo "O <b>ID: </b>".$id." do aluno que foi atualizado";

            $sql = "UPDATE `aluno` SET `aluno_id`=:id,`aluno_nome`=:nome,`aluno_matricula`=:matricula WHERE aluno_id = '$id'";
            $update = $this->con->prepare($sql);
            $update->bindValue(':id',$ClassAluno->getId());
            $update->bindValue(':nome',$ClassAluno->getNome());
            $update->bindValue(':matricula',$ClassAluno->getMatricula());
            $update->execute();
        }

    }

?>