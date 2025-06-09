What is MySql?
Ans : MySql is a free and open source relational database management system. SQL is a standard language for creating, modifying and deleting data in a database.
 MySql is a relational database management system (RDBMS)

<!-- Database operations -->

1. Create

<!-- Step to create Database -->
 create database database_name

<!-- Step to use Database -->
use database_name

<!-- show all databases -->
show databases

<!-- delete database -->
drop database database_name

<!-- create table in mysql -->
create table table_name(
    id int not null auto increment primary key,
    name varchar(50),
    email varchar(50)
)

<!-- get and search data in table  -->
select * from table_name

select * from table_name where name = 'name'

<!-- Delete and update data in table -->
update table_name set name = 'name' where id = 1

