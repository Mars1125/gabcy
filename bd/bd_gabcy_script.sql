
CREATE TABLE usuario(
id_usuario VARCHAR(25),
nombres_usuario VARCHAR(100),
apellidos_usuario VARCHAR(100),
correo_usuario VARCHAR(200),
contrasena_usuario VARCHAR(100),
telefono_usuario VARCHAR(15),
empresa_usuario VARCHAR(100),
cargo_usuario VARCHAR(100),
rol_usuario VARCHAR(50),
PRIMARY KEY(id_usuario)
);


CREATE TABLE funcion(
id_funcion VARCHAR(25),
nombre_funcion VARCHAR(100),
PRIMARY KEY (id_funcion)
);

CREATE TABLE funcion_usuario(
id_usuario VARCHAR(25),
id_funcion VARCHAR(25),
estado_funcion VARCHAR(3),
FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario),
FOREIGN KEY(id_funcion) REFERENCES funcion(id_funcion)
);

CREATE TABLE categoria(
id_categoria VARCHAR(25),
nombre_categoria VARCHAR(100),
PRIMARY KEY (id_categoria)
);


CREATE TABLE proyecto(
id_proyecto VARCHAR(25),
nombre_proyecto VARCHAR(100),
fecha_inicio_proyecto TIMESTAMP,
fecha_fin_proyecto TIMESTAMP,
url_proyecto VARCHAR(300),
id_categoria VARCHAR(25),
id_usuario VARCHAR(25),
PRIMARY KEY (id_proyecto),
FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria),
FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE etapa(
id_etapa VARCHAR(25),
nombre_etapa VARCHAR(100),
PRIMARY KEY (id_etapa)
);

CREATE TABLE etapa_proyecto(
id_etapa VARCHAR(25),
id_proyecto VARCHAR(25),
fecha_inicio TIMESTAMP,
fecha_fin TIMESTAMP,
estado VARCHAR(20),
FOREIGN KEY (id_etapa) REFERENCES etapa(id_etapa),
FOREIGN KEY (id_proyecto) REFERENCES proyecto(id_proyecto)
);

CREATE TABLE cita(
id_cita VARCHAR(25),
id_proyecto VARCHAR(25),
id_usuario VARCHAR(25),
fecha_cita TIMESTAMP,
motivo_cita VARCHAR(100),
PRIMARY KEY (id_cita),
FOREIGN KEY (id_proyecto) REFERENCES proyecto (id_proyecto),
FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);


CREATE TABLE conversacion(
id_conversacion VARCHAR(25),
id_proyecto VARCHAR(25),
PRIMARY KEY (id_conversacion),
FOREIGN KEY (id_proyecto) REFERENCES proyecto (id_proyecto)
);

CREATE TABLE mensaje(
id_mensaje VARCHAR(25),
fecha_mensaje TIMESTAMP,
texto_mensaje TEXT,
id_conversacion VARCHAR(25),
id_usuario_envia VARCHAR(25),
PRIMARY KEY (id_mensaje),
FOREIGN KEY (id_usuario_envia) REFERENCES usuario (id_usuario),
FOREIGN KEY (id_conversacion) REFERENCES conversacion (id_conversacion)
);