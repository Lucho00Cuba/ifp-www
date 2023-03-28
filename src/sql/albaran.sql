-- database: dbluis
-- USE database;

CREATE DATABASE IF NOT EXISTS Ventas;

-- table: albaran
CREATE TABLE IF NOT EXISTS albaran (
    numalbaran int(11),
    codcliente varchar(20),
    fecha date,
    PRIMARY KEY (numalbaran),
    FOREIGN KEY (codcliente) REFERENCES cliente(codcliente)
);

-- values: albaran

INSERT INTO albaran (numalbaran, codcliente, fecha) VALUES ('1', 'b02', '2011/11/11');
INSERT INTO albaran (numalbaran, codcliente, fecha) VALUES ('2', 'b06', '2011/11/12');
INSERT INTO albaran (numalbaran, codcliente, fecha) VALUES ('3', 'a01', '2011/11/13');
INSERT INTO albaran (numalbaran, codcliente, fecha) VALUES ('4', 'b02', '2011/11/14');
INSERT INTO albaran (numalbaran, codcliente, fecha) VALUES ('5', 'a01', '2011/11/15');
INSERT INTO albaran (numalbaran, codcliente, fecha) VALUES ('6', 'b07', '2011/11/16');