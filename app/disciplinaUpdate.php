<?php 

require_once "../app/class/classDisciplina.php";
require_once "../app/dao/disciplinaDao.php";

$id =8;
$ClassDisciplina = new ClassDisciplina();                           // instanciando uma classe ClassDisciplina
$ClassDisciplina->setId($id);                                       // inserindo um novo "id" nao e obrigadorio mudar
$ClassDisciplina->setNome('Administração de Banco de Dados II');       // inserindo um novo "nome" nao e obrigadorio mudar
$ClassDisciplina->setCargahora(40);                                 // inserindo um novo "carga horaria" nao e obrigadorio mudar

$disciplina = new DisciplinaDao();                                  // instanciando uma classe DisciplinaDao
$disciplina->updateDisciplina($ClassDisciplina, $id);               // enviando os dados para função "updateDisciplina"


?>