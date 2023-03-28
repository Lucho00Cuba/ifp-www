-- database: dbluis
-- USE database;

CREATE DATABASE IF NOT EXISTS Ventas;

-- table: cliente
CREATE TABLE IF NOT EXISTS cliente (
    codcliente varchar(20),
    nombre varchar(100),
    apellidos varchar(200),
    direccion varchar(200),
    telefono varchar(20),
    email varchar(100),
    PRIMARY KEY (codcliente)
);

-- values: cliente

INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES ('a01', 'Agustin', 'Alonso Berzosa', 'c/ de la vida 2', '601601601', 'pe@as.com');
INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES ('a02', 'Martha Yaneth', ' Bergano Jaramillo', 'c/ de la vida 3', '602602602', 'santiago@yahoo.es');
INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES ('b01', 'Carina Janneth', 'Collaguazo Lalangui', 'c/ de la vida 4', '603603603', 'mio@ytuyo.es');
INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES ('b02', 'Ramon', 'Diaz Garcia', 'c/ de la vida 5', '604604604', 'maria@yahoo.es');
INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES ('b03', 'Maria Francisca', 'Gimenez Llagunes', 'c/ de la vida 6', '605605605', 'chesca@gmail.com');
INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES ('b04', 'Isabel', 'Losilla Perez', 'c/ de la vida 7', '606606606', 'isable@hotmail.com');
INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES ('b05', 'El Bachir', 'Moujib Dadou', 'c/ de la vida 8', '604604604', 'elbachir@gmail.com');
INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES ('b06', 'Sergio', 'Reyes Cespedes', 'c/ de la vida 9', '606206205', 'sergio@yahoo.es');
INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES ('b07', 'Jose Maria', 'Soler Gonzales', 'c/ de la vida 10', '606606606', 'josemaria@gmail.com');
