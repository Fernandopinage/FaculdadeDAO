<?php
require_once "../app/class/classCurso.php";
require_once "../app/dao/cursoDao.php";

$ClassCurso = new ClassCurso();             // instanciando uma classe ClassCurso   
$ClassCurso->setNome('Programação I');        // acrecentando um nome para o curso

$curso = new CursoDao();                    // instanciando uma classe CursoDao   
$curso->insertCurso($ClassCurso);           // enviando os dados para a class CursoDao na função "insertCurso"


?>