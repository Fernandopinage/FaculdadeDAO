<?php 

require_once "../app/class/classCurso.php";
require_once "../app/dao/cursoDao.php";

$id = 6;                                        // acrecentando um ID manualmente

$ClassCurso = new ClassCurso();                 // instanciando uma classe ClassCurso
$ClassCurso->setId($id);                        // inserindo um novo "id" nao e obrigadorio mudar
$ClassCurso->setNome('Matematica');          // inserindo um novo registro para "nome" nao e obrigadorio mudar

$cuso = new CursoDao();                         // instanciando uma classe CursoDao
$cuso->updateCurso($ClassCurso,$id);            // enviando os dados para class CursoDao na função "updateCurso"
?>