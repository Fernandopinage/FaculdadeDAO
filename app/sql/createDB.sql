create DATABASE faculdade;

CREATE TABLE aluno(

	aluno_id int not null PRIMARY key AUTO_INCREMENT,
    aluno_nome varchar(30) not null,
    aluno_matricula varchar(4)not null

);

CREATE TABLE curso (

	curso_id int not null PRIMARY key AUTO_INCREMENT,
    curso_nome varchar (30)

);
create TABLE disciplina(


    disciplina_id int not null PRIMARY KEY AUTO_INCREMENT,
    disciplina_nome varchar(30) not null,
    disciplina_cargaH int (4) not null
    
);

create TABLE turma(

	turma_sigla varchar (4) not null,
    turma_turno varchar(10) not null,
    turma_aluno_id int not null,
    turma_curso_id int not null,
    turma_disciplina_id int not null,
    
    FOREIGN KEY(turma_aluno_id) REFERENCES aluno(aluno_id),
	FOREIGN KEY(turma_curso_id) REFERENCES curso(curso_id),
    FOREIGN KEY(turma_disciplina_id) REFERENCES disciplina(disciplina_id)
	
);