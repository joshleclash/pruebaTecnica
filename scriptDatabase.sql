create DATABASE pruebatecnica;

use pruebatecnica;
CREATE TABLE usuarios
(
   id          INT(11) NOT NULL AUTO_INCREMENT,
   email       VARCHAR(250)
                 CHARACTER SET utf8mb3
                 COLLATE utf8mb3_general_ci
                 NULL
                 DEFAULT 'NULL',
   nombre      VARCHAR(250)
                 CHARACTER SET utf8mb3
                 COLLATE utf8mb3_general_ci
                 NULL
                 DEFAULT 'NULL',
   password    VARCHAR(10)
                 CHARACTER SET utf8mb3
                 COLLATE utf8mb3_general_ci
                 NULL
                 DEFAULT 'NULL',
   failed      INT(1) NULL DEFAULT NULL,
   activate    BIT(1) NULL DEFAULT b'1',
   PRIMARY KEY(id)
);
create table Radicaciones
(
	id int(11) AUTO_INCREMENT ,
	nombre varchar(255),
	fecha datetime default(now()),
	asunto varchar(255),
	solicitud text,
	usuario_id int(11),
	primary key (id),
    FOREIGN KEY (usuario_id) references usuarios (id)
);

insert into Radicaciones(nombre,asunto,solicitud,usuario_id)
		values('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1),
		('Test','Prueba juanito','solicitud',1);		
		
		
		
