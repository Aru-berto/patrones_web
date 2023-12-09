create table empleados(
    emid int auto_increment primary key,
    nombre varchar (255) not null,
    paterno varchar (255) not null,
    materno varchar (255),
    fecha date 
)
create table usuarios(
    userid int auto_increment primary key,
    email varchar (255) not null,
    passw varchar (255) not null,
    nickname varchar (255) not null,
    empid int not null,
    foreign key(empid) references empleados(emid)
)
