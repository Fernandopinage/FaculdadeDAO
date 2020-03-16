<?php 
require_once "../app/dao/cursoDao.php";

$Curso = new CursoDao();        // instanciando uma classe CursoDao 
$Curso->deleteCurso(5);         // deletando um registro pelo ID da funçao "deleteCurso" na class CursoDao



?>