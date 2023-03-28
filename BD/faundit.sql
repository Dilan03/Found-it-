CREATE TABLE usuarios (
  no_control VARCHAR(12) PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  contraseña VARCHAR(50),
  telefono VARCHAR(15),
  id_carrera VARCHAR(5),
  fecha_registro DATETIME

  FOREIGN KEY (id_carrera) REFERENCES carreras(id_carrera) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE carreras {
    id_carrera VARCHAR(5) PRIMARY KEY,
    nombre VARCHAR(50)
};

CREATE TABLE ubicacion (
  id INT PRIMARY KEY,
  nombre VARCHAR(50),
  numero VARCHAR(10)
);

CREATE TABLE etiquetas (
  id INT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL
);

CREATE TABLE clasificacion (
  id INT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL
);

CREATE TABLE comentarios (
  id INT PRIMARY KEY,
  autor_id INT,
  contenido TEXT,
  fecha_publicacion DATETIME,
  post_id INT,
  FOREIGN KEY (autor_id) REFERENCES usuarios(id),
  FOREIGN KEY (post_id) REFERENCES posts(id)
);

CREATE TABLE posts (
  id INT PRIMARY KEY,
  nombre_objeto VARCHAR(100),
  descripcion TEXT,
  clasificacion_id INT,
  autor_id INT,
  fecha_publicacion DATETIME,
  img VARCHAR(255),
  etiquetas_id INT NOT NULL,
  antiguedad_id INT,
  ubicacion_id INT,
  c_id INT,
  FOREIGN KEY (clasificacion_id) REFERENCES clasificacion(id),
  FOREIGN KEY (autor_id) REFERENCES usuarios(id),
  FOREIGN KEY (etiquetas_id) REFERENCES etiquetas(id),
  FOREIGN KEY (antiguedad_id) REFERENCES clasificacion(id),
  FOREIGN KEY (ubicacion_id) REFERENCES ubicacion(id)
);
