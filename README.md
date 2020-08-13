# pi_tsi_2
Trabalho PI 2 semestre Senac (Pronto para apresentação)

Upload CRUD *** OK *** 

Versào Beta 3.0
The Warriors Project 

RPG CRUD BASICO !
100% working .........


Query DB {
create table usuario (
usuario_id int auto_increment not null,
usuario varchar (200) not null,
email varchar (100) not null,
senha varchar (32) not null,
nome varchar(100) not null,
data_cadastro datetime not null,
nivel int (02) not null,
status varchar (50) not null,
primary key(usuario_id));

create table erro (
id_erro int auto_increment not null,
erro varchar(300) not null,
primary key (id_erro));

create table categoria (
id_categoria int auto_increment not null,
nome_categoria varchar(100) not null,
primary key (id_categoria));

create table itens (
id_itens int auto_increment not null,
nome_itens varchar(100) not null,
primary key (id_itens));

create table armas (
id_armas int auto_increment not null,
nome_arma varchar(100) not null,
primary key (id_armas));

create table tesouro (
id_tesouro int auto_increment not null,
nome_tesouro varchar(100) not null,
primary key (id_tesouro));

create table armas (
id_armas int auto_increment not null,
nome_arma varchar(100) not null,
primary key (id_armas));

create table personagens (
id_personagens int auto_increment not null,
nome varchar (45) not null,
categoria varchar (45) not null,
armas varchar (45) not null,
itens varchar (45) not null,
tesouros varchar (45) not null,
power decimal (3) not null,
destreza decimal (3) not null,
inteli decimal (3) not null,
img BLOB NULL,
primary key (id_personagens));

}

** Verificar permissões de pastas para poder fazer upload de imagens **


