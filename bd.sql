CREATE TABLE Usuarios (
	id int auto_increment primary key,
    nome varchar(50) not null,
	email varchar(50) not null,
    telefone varchar(20) not null,
    rua varchar(100) not null,
    numero int not null,
    complemento varchar(100) not null,
    cep int not null,
    cidade varchar(100) not null,
    senha varchar(40) not null,
    foto varchar(45) not null
);