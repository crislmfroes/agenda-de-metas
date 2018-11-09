--criacao do bd
create database bdmeta;
--criacao tabela
create table meta(
    id serial,
    nome varchar(100) NOT NULL,
    descricao varchar(1000) NOT NULL,
    prioridade int NOT NULL,
    idusuario char(11) NOT NULL,
    dataprevisao date NOT NULL,
    CONSTRAINT metapk PRIMARY KEY (id),
    CONSTRAINT usuariofk FOREIGN KEY (idusuario) REFERENCES usuario(cpf)
        ON UPDATE CASCADE
        ON DELETE NO ACTION,
    CONSTRAINT prioridadeCheck CHECK (prioridade between 1 and 5)
);

create table usuario(
    cpf char(11),
    nome varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    CONSTRAINT usuariopk PRIMARY KEY (cpf)
);