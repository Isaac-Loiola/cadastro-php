create database modelophp_db;

create table usuarios(
id int auto_increment primary key,
nome varchar(50) not null, 
email varchar(100) not null unique,
datacad timestamp not null default current_timestamp
);

create table produtos(
id int auto_increment primary key,
nome varchar(50) not null, 
email double(6,2) not null ,
datacad timestamp not null default current_timestamp
);

select * from usuarios;

select * from produtos;
