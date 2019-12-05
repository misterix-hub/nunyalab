create table Contact (
    id integer unsigned auto_increment primary key,
    icone varchar(255) default '',
    libelle text,
    contact text
) engine=innodb default charset utf8;

create table Gallerie (
    id integer unsigned auto_increment primary key,
    fichier text,
    description text,
    type_fichier text
) engine=innodb default charset utf8;

create table Partenaire (
    id integer unsigned auto_increment primary key,
    logo text,
    site_web text
) engine=innodb default charset utf8;

create table ClasseIncube (
    id integer unsigned auto_increment primary key,
    nom text
) engine=innodb default charset utf8;

create table Projet (
    id integer unsigned auto_increment primary key,
    logo text,
    nom text,
    description text
) engine=innodb default charset utf8;
