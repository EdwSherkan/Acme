create schema acme_db;
use acme_db;

create table 	propietarios(id_propietario varchar(10) not null, Pnomb_propietario varchar(15) not null, Snomb_propietario varchar(15) not null,
				apell_propietario varchar(15) not null, dir_propietario varchar(45) not null, tel_propietario varchar(12) not null, 
                ciudad_propietario varchar(30) not null,
				primary key(id_propietario));
                
create table 	conductores(id_conductor varchar(10) not null, Pnomb_conductor varchar(15) not null, Snomb_conductor varchar(15) not null,
				apell_conductor varchar(15) not null, dir_conductor varchar(45) not null, tel_conductor varchar(12) not null, 
                ciudad_conductor varchar(30) not null,
				primary key(id_conductor));
                
create table 	vehiculos(id_vehiculo varchar(6) not null, color_vehiculo varchar(15) not null, marca_vehiculo varchar(15) not null,
				tipo_vehiculo varchar(10) not null, idprop_vehiculo varchar(10) not null, idcond_vehiculo varchar(10) not null,
                primary key(id_vehiculo),
                foreign key(idprop_vehiculo) references propietarios(id_propietario),
                foreign key(idcond_vehiculo) references conductores(id_conductor));
                
create table	usuarios(id_usuario int not null auto_increment, nomb_usuario varchar(10) not null, passw_usuario varchar(10) not null,
				rol_usuario varchar(15) not null,
                primary key(id_usuario));
                
                
                
                
                
                
                