CREATE TABLE roles(
id INT PRIMARY KEY,
rol ENUM('invitado', 'admin', 'usuario') not null
);

CREATE TABLE carreras(
id VARCHAR(5) PRIMARY KEY,
nombre VARCHAR(50) not null
);

CREATE TABLE usuarios(
no_control VARCHAR(12) PRIMARY KEY,
nombre VARCHAR(50) not null,
apellido VARCHAR(50) not null,
contraseña VARCHAR(50) not null,
foto MEDIUMBLOB,
telefono VARCHAR(15) not null,
id_carrera VARCHAR(5) not null,
id_rol INT not null,

FOREIGN KEY (id_carrera) REFERENCES carreras(id) ON DELETE RESTRICT ON UPDATE CASCADE,
FOREIGN KEY (id_rol) REFERENCES roles(id) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE ubicacion(
id INT PRIMARY KEY,
nombre VARCHAR(10) not null,
numero VARCHAR(10)
);

CREATE TABLE clasificacion(
id INT PRIMARY KEY,
nombre VARCHAR(20) not null
);

CREATE TABLE detallesPosts(
id INT PRIMARY KEY,
nombre_objeto VARCHAR(100) not null,
descripcion TINYTEXT, 
fecha_publicacion DATETIME not null,
id_ubicacion INT not null,
id_clasificacion INT,

FOREIGN KEY (id_ubicacion) REFERENCES ubicacion(id) ON DELETE RESTRICT,
FOREIGN KEY (id_clasificacion) REFERENCES clasificacion(id) ON DELETE RESTRICT
);

CREATE TABLE posts(
id INT PRIMARY KEY,
id_autor VARCHAR(12) not null,
id_detallesPosts INT not null,

FOREIGN KEY (id_detallesPosts) REFERENCES detallesPosts(id) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (id_autor) REFERENCES usuarios(no_control) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE etiquetas(
id INT PRIMARY KEY,
nombre ENUM('ancient', 'lost', 'found', 'gathered') not null,
id_post INT,

FOREIGN KEY (id_post) REFERENCES posts(id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE comentarios(
id INT PRIMARY KEY,
id_autor VARCHAR(12) not null,
contenido TEXT not null, 
fecha_publicacion DATETIME not null,
id_post INT not null,

FOREIGN KEY (id_post) REFERENCES posts(id) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (id_autor) REFERENCES usuarios(no_control) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE imagenes(
id INT PRIMARY KEY,
imagen MEDIUMBLOB not null,
id_post INT not null,

FOREIGN KEY (id_post) REFERENCES posts(id) ON DELETE CASCADE ON UPDATE CASCADE
);