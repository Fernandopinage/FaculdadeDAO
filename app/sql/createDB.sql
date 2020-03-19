create DATABASE faculdade;

use faculdade; 

CREATE TABLE aluno(
    aluno_id int not null PRIMARY key AUTO_INCREMENT,
    aluno_nome varchar(30) not null,
    aluno_matricula varchar(4)not null
);

CREATE TABLE curso (
    curso_id int not null PRIMARY key AUTO_INCREMENT,
    curso_nome varchar (50) not null

);
create TABLE disciplina(
    disciplina_id int not null PRIMARY KEY AUTO_INCREMENT,
    disciplina_nome varchar(50) not null,
    disciplina_cargaH int (4) not null    
);

create TABLE turma(
    turma_id int not null PRIMARY KEY AUTO_INCREMENT,  
    turma_sigla varchar (4) not null,
    turma_turno varchar(10) not null,
    turma_aluno_id int not null,
    turma_curso_id int not null,
    turma_disciplina_id int not null,    
    FOREIGN KEY(turma_aluno_id) REFERENCES aluno(aluno_id),
    FOREIGN KEY(turma_curso_id) REFERENCES curso(curso_id),
    FOREIGN KEY(turma_disciplina_id) REFERENCES disciplina(disciplina_id)
	
);

INSERT INTO aluno VALUES (4,'LUIZ EDUARDO','1234'),(6,'ADIELSON','3425'),(7,'LUIZ FERNANDO','9988'),(8,'PAULO','5510'),(9,'MARCOS','ABC1'),(10,'ROBERTO','99AA');
INSERT INTO curso VALUES (1,'ANALISE DE SISTEMAS'),(2,'ENGENHARIA DE SOFTWARE'),(5,'ENGENHARIA DA COMPUTACAO'),(6,'CIENCIA DA COMPUTACAO'),(7,'SISTEMAS DA INFORMACAO');
INSERT INTO disciplina VALUES (1,'BANCO DE DADOS',20),(3,'CONECTIVIDADE EM BANCO',34),(5,'Fundamentos e Arquitetura de Computadores.',33),(6,'Algoritmos e Logica de Programacao.',60),(7,'Caculo',60),(8,'Engenharia de Requisitos',40),(9,'Analise Orientada a Objetos',50),(10,'Modelagem de Software',30);

