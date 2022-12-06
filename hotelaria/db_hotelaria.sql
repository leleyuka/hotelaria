create database db_hotelaria;

use db_hotelaria;

create table tbl_categoria(
cd_categoria int primary key auto_increment,
nm_categoria varchar(50) not null,
ds_categoria text not null
)
default charset utf8;

drop table tbl_categoria;

insert into tbl_categoria values(default, 'Avandra Standard', 'Inclui uma cama de solteiro, uma escrivaninha, quatro tomadas, uma TV, ar condicionado, um armário pequeno com cofre médio, um frigobar e um banheiro.'),
(default, 'Avandra Master', 'Inclui duas camas de casal, uma escrivaninha, cinco tomadas, uma TV, ar condicionado, um armário médio com cofre médio, um frigobar e um banheiro.'),
(default, 'Avandra Deluxe', 'Inclui duas camas de casal, uma escrivaninha, seis tomadas, duas TVs (quarto e sala), um armário grande com cofre grande, ar condicionado (sala e quarto), dois frigobars (quarto e sala), mini-sala com sofá, mesa redonda com 4 cadeiras e um banheiro com pia dupla.');

select * from tbl_categoria;

create table tbl_quartos(
cd_quarto int primary key auto_increment,
cd_categoria int not null,
no_quarto int not null,
nm_quarto varchar(50) not null,
vl_reserva decimal(10,2) not null,
ds_imagem varchar(255) not null,
no_disponibilidade boolean not null,
foreign key(cd_categoria) references tbl_categoria(cd_categoria)
)
default charset utf8;

ALTER TABLE tbl_categoria ADD no_disponibilidade INT NULL;

UPDATE tbl_quartos SET no_disponibilidade = "0" WHERE cd_quarto = 3;

select * from tbl_quartos;

drop table tbl_quartos;

insert into tbl_quartos values(default, 1, 47,'Avandra Standard', '1500.00', 'quarto3.jpeg', 1);
insert into tbl_quartos values(default, 2, 138,'Avandra Master', '3500.00', 'quarto1.jpg', 0);
insert into tbl_quartos values(default, 3, 17, 'Avandra Deluxe', '500.00','quarto2.jpg', 1);


create view vw_quartos
as select
tbl_quartos.cd_quarto,
tbl_categoria.nm_categoria,
tbl_categoria.ds_categoria,
tbl_quartos.no_quarto,
tbl_quartos.nm_quarto,
tbl_quartos.ds_imagem,
tbl_quartos.vl_reserva,
tbl_quartos.no_disponibilidade
from tbl_quartos inner join tbl_categoria
on tbl_quartos.cd_categoria = tbl_categoria.cd_categoria;

select * from vw_quartos;
drop view vw_quartos;

create table tbl_usuario(
cd_usuario int primary key auto_increment,
nm_usuario varchar(80) not null,
ds_email varchar(80) not null,
ds_senha varchar(6) not null,
ds_status boolean not null
)
default charset utf8;

insert into tbl_usuario values(default, 'Camila Martins', 'caamrtns@gmail.com', '12345', 1);
insert into tbl_usuario values(default, 'Carlos Martins', 'carloseduardo@gmail.com', 'carlos', 1);

select * from tbl_usuario;

create table tbl_reserva(
cd_reserva int(11) primary key auto_increment,
no_reserva varchar(13) not null,
cd_cliente int(11) not null,
cd_quarto int(11) not null,
qtd_quarto int(11) not null,
vl_reserva decimal(10,2),
dt_reserva date not null
)
default charset utf8;
select no_reserva from tbl_reserva where no_reserva = '638a9815b2dfe';
select * from tbl_reserva;
drop table tbl_reserva;

create table tbl_checkin(
cd_checkin int primary key auto_increment,
nm_usuario varchar(80) not null,
no_identidade varchar(50) not null,
dt_chekin date not null,
no_reserva varchar(13)
)
default charset utf8;

select * from tbl_checkin;

drop table tbl_checkin;

create table tbl_checkout(
cd_checkout int primary key auto_increment,
nm_usuario varchar(80) not null,
no_identidade varchar(50) not null,
dt_chekout date not null
)
default charset utf8;

select * from tbl_checkout;

drop table tbl_checkin;

drop table tbl_checkout;

create user 'user'@'localhost' identified with mysql_native_password by '1234567';
grant all privileges on db_hotelaria.* to 'user'@'localhost' with grant option;