CREATE DATABASE nutricion;
USE nutricion;

CREATE TABLE usuario (
    id integer PRIMARY KEY,
    nombre varchar(50) NOT NULL,
    apellidos varchar(50),
    correo varchar(50) UNIQUE NOT NULL,
    contrasenha varchar(100) UNIQUE NOT NULL,
    edad tinyint,
    peso numeric(5,2),
    altura numeric(3,2),
    nivel_actividad integer, -- ???
    meta_diaria varchar(50),
    indice_masa_corporal varchar(50),
    tasa_metabolica integer
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE alimentos (
    id integer PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    calorias integer NOT NULL,
    tipo varchar(50), -- vegetales, carnes, etc
    popularidad integer AUTO_INCREMENT
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE usuario_consume (
    id_usuario integer,
    id_alimento integer,
    cantidad numeric(5,2) NOT NULL,
    fecha date NOT NULL,
    CONSTRAINT alimentos_fk1 FOREIGN KEY (id_usuario) REFERENCES usuario (id)
    ON DELETE CASCADE 
    ON UPDATE CASCADE,
    CONSTRAINT alimentos_fk2 FOREIGN KEY (id_alimento) REFERENCES alimentos (id)
    ON DELETE CASCADE 
    ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



CREATE TABLE receta (
	id integer PRIMARY KEY,
	nombre varchar(100)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE composicion_receta (
	receta_id integer,
	alimento_id integer,
	cantidad integer,
	CONSTRAINT composicion_receta_fk1 FOREIGN KEY (receta_id) REFERENCES receta (id)
	ON DELETE CASCADE
	ON UPDATE CASCADE,
	CONSTRAINT composicion_receta_fk2 FOREIGN KEY (alimento_id) REFERENCES alimentos (id)
	ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- inserciones 

INSERT INTO usuario (id, nombre, apellidos, correo, contrasenha, edad, peso, altura) VALUES 
(1, 'asdads', 'adsad', 'asdasd@gmail.com', '123', 20, 79.6, 1.70);

INSERT INTO alimentos (id, nombre, calorias, tipo) VALUES 
(1, 'manzana', 150, 'fruta'),
(2, 'papa', 350, 'tuberculo'),
(3, 'tomate', 200, 'vegetal'),
(4, 'huevo', 150, null),
(5, 'arroz', 100, 'cereal');

INSERT INTO usuario_consume (id_usuario, id_alimento, cantidad, fecha) VALUES
(1, 2, 1, '2020-10-10'),
(1, 3, 1, '2020-10-10');


INSERT INTO receta (id, nombre) VALUES
(1, 'huevo frito'),
(2, 'arroz chaufa');

INSERT INTO composicion_receta (receta_id, alimento_id, cantidad) VALUES
(1, 4, 2),
(2, 5, 1);