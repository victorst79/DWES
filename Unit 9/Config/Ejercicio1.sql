DROP DATABASE Ejemplos;
CREATE DATABASE Ejemplos;
CREATE TABLE Empleados(
nif VARCHAR(9) PRIMARY KEY,
nombre VARCHAR(50),
telefono INT(9), 
email VARCHAR(30), 
departamento VARCHAR(20), 
categoria VARCHAR(20), 
salario DOUBLE
);

INSERT INTO Ejemplos VALUES('18485623D','Jose','666894521','jpinero@juanmail.es','Informatica','ECMAscript','1000');
INSERT INTO Ejemplos VALUES('85461232H','Piedad','623147889','pmb.daw2.dwes@juanmail.com','Informatica','PHP','1000');
INSERT INTO Ejemplos VALUES('96574123F','Paco','634787878','ciclo-ayala@juanmail.com','Informatica','Basedatos','1000');
INSERT INTO Ejemplos VALUES('00000001A','Luis','662000001','pasodetucara@juanmail.com','Informatica','CSS','1000');

CREATE TABLE Departamentos(
codigo VARCHAR(20) PRIMARY KEY,
nombre VARCHAR(25)
);

INSERT INTO Ejemplos VALUES('10_infor','Informatica');
INSERT INTO Ejemplos VALUES('20_ventas','Ventas');
