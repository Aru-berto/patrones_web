create table empleados(
    empid int auto_increment primary key,
    nombre varchar(255) not null,
    paterno varchar(255) not null,
    materno varchar(255),
    fechanac date,
    ingreso TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)

create table usuarios(
    userid int auto_increment primary key,
    email varchar(255) not null,
    passw varchar(255) not null,
    nickname varchar(255) not null,
    fechalt TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    empid int not null,
    FOREIGN KEY (empid) references empleados(empid)
)