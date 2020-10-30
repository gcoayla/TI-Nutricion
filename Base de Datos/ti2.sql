CREATE DATABASE nutricion;
USE nutricion;

CREATE TABLE usuario (
    id integer PRIMARY KEY,
    nombre varchar(50) NOT NULL,
    apellidos varchar(50),
    correo varchar(50) NOT NULL,
    contrasenha varchar(100) UNIQUE NOT NULL,
    edad tinyint,
    telefono integer
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE dieta (
    id integer PRIMARY KEY,
    duracion tinyint NOT NULL -- semanas
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE dieta_alimentos (
    id_alimento integer,
    id_dieta integer
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE alimentos (
    id integer PRIMARY KEY,
    nombre varchar(50) NOT NULL,
    tipo varchar(50) -- vegetales, carnes, etc
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE nutrientes (
    id integer PRIMARY KEY,
    nombre varchar(50) NOT NULL,
    tipo varchar(50) -- energeticos, reparadores, reguladores ...
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE macro (
    id_nutriente integer,
    tipo varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE micro (
    id_nutriente integer,
    tipo varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- inserciones 

INSERT INTO usuario (id, nombre, apellidos, correo, contrasenha, edad, telefono) VALUES 
(1, 'asdads', 'adsad', 'asdasd@gmail.com', '123', 20, 987654321);

INSERT INTO dieta (id, semanas) VALUES (1, 8);

INSERT INTO dieta_alimentos (id_alimento, id_dieta) VALUES 
(1, 2),
(1, 1),
(1, 3);

INSERT INTO alimentos (id, nombre, tipo) VALUES 
(1, 'manzana', 'fruta'),
(2, 'papa', 'tuberculo'),
(3, 'tomate', 'vegetal');

INSERT INTO nutrientes (id, nombre, tipo) VALUES 
(1, 'carbohidratos', 'energetica'),
(2, 'sales', 'energeticas'),
(3, 'vitaminas', 'reguladoras'),
(4, 'proteínas', 'energeticas');

INSERT INTO macro (id_nutriente, tipo) VALUES
(1, null),
(4, null);

INSERT INTO micro (id_nutriente, tipo) VALUES 
(2, null),
(3, null);