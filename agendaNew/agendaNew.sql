create database agendaNew;

use agendaNew;

create table agendaNew(
     id_agendaNew int not null auto_increment,
    nome varchar(50) not null,
    apelido varchar(40) not null,
    endereco varchar(70) not null,
    bairro varchar(50) not null,
    cidade varchar(50) not null,
    estado varchar(02) not null,
    telefone varchar(15) not null,
    celular varchar(15) not null,
    email varchar(70) not null,
    foto_blob blob, 
    foto_nome varchar(100),
    dt_cadastro date not null,
    PRIMARY KEY (id_agendaNew)
);