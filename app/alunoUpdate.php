<?php 

require_once "../app/class/classAluno.php";
require_once "../app/dao/alunoDao.php";

$id= 1;                                                     // acrecentando um ID manualmente 

$ClassAluno = new ClassAluno();                             // instanciando uma classe ClassAluno
$ClassAluno->setId($id);                                    // inserindo um novo "id" nao e obrigadorio mudar 
$ClassAluno->setNome('Luiz  Coutinho');      // inserindo um novo registro para "nome" nao e obrigadorio mudar
$ClassAluno->setMatricula('11A');                           // inserindo um novo registro "matricula" nao e obrigadorio mudar

$aluno = new AlunoDao();                                    //instanciando uma classe AlunoDao
$aluno->updateAluno($ClassAluno,$id);                       // enviando os dados para class AlunoDao na função "updateAluno"


?>