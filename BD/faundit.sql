CREATE TABLE usuarios (
  no_control VARCHAR(12) PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  contraseña VARCHAR(50),
  telefono VARCHAR(15),
  id_carrera VARCHAR(5),
  id_detallesPosts INT,
  id_comentarios INT,
  fecha_registro DATETIME

  FOREIGN KEY (id_carrera) REFERENCES carreras(id_carrera) ON DELETE RESTRICT ON UPDATE RESTRICT,
  FOREIGN KEY (id_detallesPosts) REFERENCES detallesPosts(id),
  FOREIGN KEY (id_comentarios) REFERENCES comentarios(id)
);

CREATE TABLE carreras {
    id_carrera VARCHAR(5) PRIMARY KEY,
    nombre VARCHAR(50)
};

CREATE TABLE ubicacion (
  id INT PRIMARY KEY,
  nombre VARCHAR(10),
  numero VARCHAR(10)
);

CREATE TABLE etiquetas (
  id INT PRIMARY KEY,
  nombre VARCHAR(8) NOT NULL
);

CREATE TABLE clasificacion (
  id INT PRIMARY KEY,
  nombre VARCHAR(9) NOT NULL
);

CREATE TABLE comentarios (
  id INT PRIMARY KEY,
  autor_id INT,
  contenido TEXT, /*Cuánto será el límite?*/
  fecha_publicacion DATETIME,
  post_id INT,
);

CREATE TABLE detallesPosts (
  id INT PRIMARY KEY,
  nombre_objeto VARCHAR(100),
  descripcion TEXT, /*Cuánto será el límite?*/
  clasificacion_id INT,
  autor_id INT,
  fecha_publicacion DATETIME,
  img /*tipo de dato de imagen*/,
  id_ubicacion INT,
  id_clasificacion INT,
  id_etiquetas INT,

  FOREIGN KEY (id_ubicacion) REFERENCES ubicacion(id) ON DELETE RESTRICT,
  FOREIGN KEY (id_clasificacion) REFERENCES clasificacion(id) ON DELETE RESTRICT,
  FOREIGN KEY (id_etiquetas) REFERENCES etiquetas(id) ON DELETE RESTRICT
);

CREATE TABLE posts {
  id INT PRIMARY KEY,
  nombre_objeto VARCHAR(100),
  descripcion TEXT /*cuánto será el límite?*/,
  clasificacion_id INT,
  autor_id INT,
  fecha_publicacion DATETIME,
  img VARCHAR(255),
  id_detallesPosts INT,
  id_comentarios INT,

  FOREIGN KEY (id_detallesPosts) REFERENCES detallesPosts(id) ON DELETE CASCADE ON UPDATE CASCADE
  FOREIGN KEY (id_comentarios) REFERENCES comentarios(id)
};
