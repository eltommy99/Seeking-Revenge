CREATE DATABASE IF NOT EXISTS SeekingRevenge;
USE SeekingRevenge;

CREATE TABLE Usuarios
(
NombreUsuario Varchar(15) NOT NULL,
Contraseña Varchar (15) NOT NULL,
Nick Varchar (15) NOT NULL,
Edad int NOT NULL,
Pais Varchar (15) NOT NULL,
PRIMARY KEY (NombreUsuario)
);
