<?php

//require_once "../app/class/classCurso.php";
require_once "../app/dao/cursoDao.php";

$curso = new CursoDao();        // instanciando uma classe CursoDao 
$curso->listaCurso();           // criando um select na funçao "listaCurso" da Class CursoDao


?>