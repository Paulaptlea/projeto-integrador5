create database projeto4;
use projeto4;
create table cliente(
    idcliente int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    tamanho varchar(40) not null,
    nomeobra varchar(100) not null,
    redessociais varchar(50) not null,
    sinopse varchar(200) not null,
    dtcadastro date
);
insert into cliente values
(null, 'ana', 'ana@gmail.com', '2222-3333','2002-11-09');

select * from cliente;