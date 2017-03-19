Create table USUARIO(
clave_usuario integer(3) primary key,
nombre_usurio varchar(50) not null,
apellido_paterno varchar(50) not null,
apellido_materno varchar(50),
email varchar(100) not null,
telefono_casa integer(11),
telefono_celular integer(11),
delegacion varchar(30),
colonia varchar(30),
calle varchar(20),
cp integer(5)
)

Create table PLATILLO(
clave_platillo integer(3) primary key,
nombre_platillo varchar(20) not null,
tipo varchar(15) not null,
costo integer(3) not null,
tiempo varchar(15)
)

create table PEDIDOS(
clave_pedido integer(5) primary key,
usuario integer(3) references usuario,
platillo integer(3) references platillo,
costo_pedido integer(5) not null,
fecha date not null
)

create table RECETAS(
clave_receta integer(3) primary key,
platillo integer(3) references platillo,
porciones integer (2),
preparacion varchar (250) not null,
tipo varchar(15) not null
)

create table EVENTOS(
clave_evento integer(5) primary key,
nombre_evento varchar (50) not null,
fecha_evento date not null,
menu integer(3) references platillo,
descripcion varchar(250) not null
)

create table PROMOCIONES(
clave_promocion integer(5) primary key,
tiempo date not null,
descripcion varchar (250) not null,
platillo integer(3) references platillo,
costo integer(5) not null
)