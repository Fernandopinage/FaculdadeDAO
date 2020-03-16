<?php 

require_once "../app/class/classDisciplina.php";
require_once "../app/dao/disciplinaDao.php";

$ClassDisciplina = new ClassDisciplina();                               // instanciando uma classe ClassDisciplina
$ClassDisciplina->setNome('Otimização de Consultas e Laboratório');     // enviando o "nome"
$ClassDisciplina->setCargahora(24);                                     // enviando a "carga hora"

$disciplina = new DisciplinaDao();                                      // instanciando uma classe DisciplinaDao
$disciplina->insertDisciplina($ClassDisciplina);                        // enviando os dados "nome e carga h" para função "insertDisciplina"

?>