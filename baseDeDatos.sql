create database paquetex;
use paquetex;

create table cliente(
id_cliente int,
nombre varchar(25),
dirección varchar (20),
barrio varchar(25),
primary key(id_cliente)
);

create table infoPaquete(
id_paquete int,
descripcion varchar(25),
dirección varchar (20),
remitente varchar (50),
destinatario varchar(20),
direcciondest varchar(25),
primary key(id_paquete)
);

create table conductor(
id_conductor int,
nombre varchar(25),
telefono varchar (10),
direccion varchar (20),
salario int,
municipio varchar (10),
matricula varchar (20),
foto varchar(50),
primary key(id_conductor)
); 

create table camiones(
id_camiones int,
modelo varchar(20),
tipo varchar (20),
potencia varchar(6),
foto varchar(50),
primary key(id_camiones)
);

create table infoDeEntrega(
id_codigoCiudad int,
nombreCiudad varchar(20),
primary key (id_codigoCiudad)
);

create table envios(
id_paquete int,
id_conductor int,
primary key (id_paquete,id_conductor),
foreign key (id_paquete) references infoPaquete (id_paquete),
foreign key (id_conductor) references conductor (id_conductor)
);

create table conductoresCamiones(
id_camiones int,
id_conductor int,
primary key (id_camiones,id_conductor),
foreign key (id_camiones) references camiones (id_camiones),
foreign key (id_conductor) references conductor (id_conductor)
);


insert into infoPaquete values
(0001,'Vasos','calle 23 #15-50','Carlitos','Paris','cr99ase'),
(0002,'sillas','avenida 4','Juan','Colombia','calle 3'),
(0003,'Cama','calle 10 #15-50','Jesus','alemania','cr99ase'),
(0004,'Armario','calle 10 #15-50','Milton','cartagea','cr99ase'),
(0005,'Guitarra','calle 10 #15-50','Rosa','Dominicana','cr99ase'),
(0006,'Lavadora','calle 10 #15-50','Alina','Mexico','cr99ase');

insert into conductor values
(01,'Pepito','3017865','cr99cr84','500000','Medellín','123456','camiones/ejemplo.png'),
(02,'Felipe','3017865','cr99cr84','500000','bogota','123456','camiones/ejemplo.png'),
(03,'Andres','154848','calleb 34','1000000','cali','12345','camiones/ejemplo.png');

insert into camiones values
(001,'2006','foton','1000','img/camioncito'),
(002,'2015','jag','1500','img/camioncito'),
(003,'2003','fuso','3000','img/camioncito');

insert into infoDeEntrega values(1,'paris');

insert into envios values
(0001,01),(0004,01),
(0002,02),(0005,02),
(0003,03),(0006,03);

insert into conductoresCamiones values
(001,01),
(002,02),
(003,03);