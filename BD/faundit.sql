CREATE TABLE roles {
  id INT PRIMARY KEY,
  rol ENUM('invitado', 'admin', 'usuario')
};

CREATE TABLE carreras {
  id VARCHAR(5) PRIMARY KEY,
  nombre VARCHAR(50)
};

CREATE TABLE usuarios (
  no_control VARCHAR(12) PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  contraseña VARCHAR(50),
  foto MEDIUMBLOB,
  telefono VARCHAR(15),
  fecha_registro DATETIME,
  id_carrera VARCHAR(5),
  id_rol INT,

  FOREIGN KEY (id_carrera) REFERENCES carreras(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  FOREIGN KEY (id_rol) REFERENCES roles(id) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE ubicacion (
  id INT PRIMARY KEY,
  nombre VARCHAR(10),
  numero VARCHAR(10)
);

CREATE TABLE clasificacion (
  id INT PRIMARY KEY,
  nombre VARCHAR(20) NOT NULL
);

CREATE TABLE detallesPosts (
  id INT PRIMARY KEY,
  nombre_objeto VARCHAR(100),
  descripcion TINYTEXT, 
  fecha_publicacion DATETIME,
  id_ubicacion INT,
  id_clasificacion INT,

  FOREIGN KEY (id_ubicacion) REFERENCES ubicacion(id) ON DELETE RESTRICT,
  FOREIGN KEY (id_clasificacion) REFERENCES clasificacion(id) ON DELETE RESTRICT
);

CREATE TABLE posts {
  id INT PRIMARY KEY,
  id_autor INT,
  id_detallesPosts INT,

  FOREIGN KEY (id_detallesPosts) REFERENCES detallesPosts(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_autor) REFERENCES usuarios(id) ON DELETE CASCADE ON UPDATE CASCADE
};

CREATE TABLE etiquetas (
  id INT PRIMARY KEY,
  nombre ENUM('ancient', 'lost', 'found', 'gathered'),
  id_post INT,

  FOREIGN KEY (id_post) REFERENCES posts(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE comentarios (
  id INT PRIMARY KEY,
  id_autor INT,
  contenido TEXT, 
  fecha_publicacion DATETIME,
  id_post INT,

  FOREIGN KEY (id_post) REFERENCES posts(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_autor) REFERENCES usuarios(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE imagenes {
  id INT PRIMARY KEY,
  imagen MEDIUMBLOB,
  id_post INT,

  FOREIGN KEY (id_post) REFERENCES posts(id) ON DELETE CASCADE ON UPDATE CASCADE
};
