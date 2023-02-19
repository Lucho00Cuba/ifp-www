-- database: dbluis
-- USE database;

-- table: producto
CREATE TABLE producto (
    codproducto varchar(20),
    descripcion varchar(200),
    precio DECIMAL(5,2),
    PRIMARY KEY (codproducto)
);

-- values: producto

INSERT INTO producto (codproducto, descripcion, precio) VALUES ('A0001', 'Caja ATX Fuente 500 Watts', 25.30);
INSERT INTO producto (codproducto, descripcion, precio) VALUES ('A0002', 'Placa Base Intel P5G41T-M LX', 36.00);
INSERT INTO producto (codproducto, descripcion, precio) VALUES ('A0003', 'Procesador Intel Celeron e3100', 25.00);
INSERT INTO producto (codproducto, descripcion, precio) VALUES ('A0004', 'Memoria 2GB PC-1333 DDR3', 12.00);
INSERT INTO producto (codproducto, descripcion, precio) VALUES ('A0005', 'Disco Duro 500GB SATA-3', 60.00);
INSERT INTO producto (codproducto, descripcion, precio) VALUES ('A0006', 'Lector DVD RW SATA LG H22N', 22.00);