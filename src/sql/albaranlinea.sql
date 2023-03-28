-- database: dbluis
-- USE database;

CREATE DATABASE IF NOT EXISTS Ventas;

-- table: albaranlinea
CREATE TABLE IF NOT EXISTS albaranlinea (
    numalbaran int(11),
    numlinea int(10),
    codproducto varchar(20),
    cantidad int(11),
    PRIMARY KEY (numlinea),
    -- FOREIGN KEY (codproducto) REFERENCES producto(codproducto),
    FOREIGN KEY (numalbaran) REFERENCES albaran(numalbaran)
);

-- values: albaranlinea

INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES ('1', '1', 'A0001', '3');
INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES ('1', '2', 'A0002', '2');
INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES ('2', '3', 'A0004', '3');
INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES ('2', '4', 'A0002', '12');
INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES ('3', '5', 'A0004', '1');
INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES ('4', '6', 'A0002', '1');
INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES ('4', '7', 'A0004', '2');
INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES ('4', '8', 'A0004', '5');
INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES ('5', '9', 'A0002', '6');