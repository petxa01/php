drop table IF EXISTS reservation;
create table reservation(
  id int(5) NOT NULL AUTO_INCREMENT,
  customer_id VARCHAR(9) UNIQUE,
  room_id int(4),
  enterDate date,
  leaveDate date,
  PRIMARY KEY (id),
  FOREIGN KEY (customer_id)
    REFERENCES customers(id)
    ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (room_id)
   REFERENCES Rooms(id)
   ON UPDATE CASCADE ON DELETE CASCADE
);
Drop table IF EXISTS employees;
create table employees(
  id int(5) NOT NULL AUTO_INCREMENT,
  nan VARCHAR (9) UNIQUE,
  name TEXT(50),
  surname1 Text(50),
  surname2 text(50),
  phone int(9),
  email VARCHAR(50) UNIQUE,
  gender text(50),
  job_Type VARCHAR(50),
  user_name VARCHAR(50) UNIQUE,
  user_pw VARCHAR(50),
  isAdmin boolean,
  PRIMARY KEY (id)


);
drop table IF EXISTS customers;
create table customers(
  id int(5) NOT NULL AUTO_INCREMENT,
  nan VARCHAR (9) UNIQUE,
  name TEXT(50),
  surname1 Text(50),
  surname2 text(50),
  phone int(9),
  email VARCHAR(50) UNIQUE,
  gender text(50),
  payment_method VARCHAR(50),
  user_name VARCHAR(50) UNIQUE,
  user_pw VARCHAR(50),
  PRIMARY KEY (id)

);
drop table IF EXISTS rooms;
create table rooms(
  id int(5) NOT NULL AUTO_INCREMENT,
  roomNumber int(4) UNIQUE,
  floorNumber int(2),
  type_of_room VARCHAR (30),
  PRIMARY KEY (id)

);
insert into rooms values (101,1,"single");
insert into rooms values (102,1,"single");
insert into rooms values (103,1,"single");
insert into rooms values (104,1,"single");
insert into rooms values (105,1,"single");
insert into rooms values (106,1,"single");
insert into rooms values (201,2,"suit");
insert into rooms values (202,2,"suit");
