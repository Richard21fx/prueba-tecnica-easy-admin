Create Table actores(
    id INT (255) auto_increment not null,
    nombre varchar(500) not null,
    fecha_nacimiento date,
    fecha_fallecimiento date,
    lugar_nacimiento varchar(255),

    constraint pk_actores PRIMARY KEY (id)
 
)ENGINE=InnoDb;

CREATE TABLE directores(
     id INT (255) auto_increment not null,
     pelicula varchar (255) not null,
     nombre varchar(255) not null,
     fecha_nacimiento date,
     constraint pk_director PRIMARY KEY (id)
     
)ENGINE=InnoDb;

Create Table peliculas(
    id INT (255) auto_increment not null,
    imdb_title_id varchar (50) not null,
    Titulo varchar (200) not null,
    fecha_publicacion date,
    generos varchar (100) not null,
    Duracion float(100,2) not null,
    productora varchar (255),
    actor_id INT (255)  not null,
    director_id INT (255)  not null,

    constraint pk_peliculas primary key(id),
    constraint fk_actores_pelicula FOREIGN KEY (actor_id) references actores(id),
    constraint fk_director_pelicula FOREIGN KEY (director_id) REFERENCES directores(id)
)ENGINE=InnoDb;

CREATE TABLE imbd_movies(
id INT (255) auto_increment NOT NULL,
imdb_title_id varchar (50),
Titulo varchar (255),
Titulo_original varchar (255),
año INT(50),
Fecha_de_estreno date,
genero varchar(255),
duracion int(25),
pais varchar(255),
idioma varchar(100),
director varchar (255),
guionista varchar (255),
compañia_productora text,
actores text,
descripcion text,
votos_promedio int (50),
votos int (100),
presupuesto varchar(100),
ingresos_brutos_estados_unidos varchar (100),
ingresos_brutos_mundiales varchar (100),
meta_objetivo varchar(20),
opinion_del_publico INT(20),
opinion_de_la_critica INT (20),

CONSTRAINT pk_imbd_movies PRIMARY KEY (id)

)ENGINE=InnoDb;