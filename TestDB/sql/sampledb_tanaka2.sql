drop database if exists sampledb_tanaka2;
create database sampledb_tanaka2;
use sampledb_tanaka2;

create table sample_table(
no int,
name varchar(50),
age int,
Mail varchar(50)
);

insert into sample_table values(1,"Yamada",21,"xxx@yahoo.co.jp");
insert into sample_table values(2,"Sato",39,"yyy@yahoo.co.jp");
insert into sample_table values(3,"Harada",44,"zzz@yahoo.co.jp");