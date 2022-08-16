CREATE DATABASE album_anatomico;
use album_anatomico;

create table tipo (
  id int auto_increment,
  nome varchar(100),
  primary key (id)
);

create table osso (
  id int auto_increment,
  nome varchar(100),
  funcao varchar(250),
  primary key (id)
);

create table membro (
  id int auto_increment,
  nome varchar(100),
  partes varchar(250),
  primary key (id),
  id_osso int,
  foreign key (id_osso) references osso(id)
);


create table membro_osso_assoc (
  id_membro int,
  id_osso int,
  foreign key (id_membro) references membro(id),
  foreign key (id_osso) references osso(id),
  primary key(id_membro, id_osso)
);