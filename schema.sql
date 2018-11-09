--criacao do bd
create database bdmeta
--criacao tabela
create table meta(
    id int,
    nome varchar(100) NOT NULL,
    descricao varchar(1000) NOT NULL,
    prioridade int NOT NULL,
    CONSTRAINT metapk PRIMARY KEY (id),
    CONSTRAINT prioridadeCheck CHECK (prioridade between 1 and 5))
