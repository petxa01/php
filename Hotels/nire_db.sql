drop table reservation;
create table reservation(
  resCod int(5) PRIMARY KEY,
  customer_nan VARCHAR(9),
  roomNumber int(4),
  enterDate date,
  leaveDate date,
  FOREIGN KEY (customer_nan) REFERENCES customers(nan),
  FOREIGN KEY (roomNumber) REFERENCES Rooms(roomNumber)
);
Drop table employees;
create table employees(
  nan VARCHAR (9) PRIMARY KEY,
  name TEXT(50),
  surname1 Text(50),
  surname2 text(50),
  phone int(9),
  email VARCHAR(50) UNIQUE,
  gender text(50),
  job_Type VARCHAR(50),
  user_name VARCHAR(50) UNIQUE,
  user_pw VARCHAR(50),
  isAdmin boolean


);
drop table customers;
create table customers(
  nan VARCHAR (9) PRIMARY KEY,
  name TEXT(50),
  surname1 Text(50),
  surname2 text(50),
  phone int(9),
  email VARCHAR(50) UNIQUE,
  gender text(50),
  payment_method VARCHAR(50),
  user_name VARCHAR(50) UNIQUE,
  user_pw VARCHAR(50)

);
drop table rooms;
create table rooms(
  roomNumber int(4) PRIMARY KEY,
  floorNumber int(2) PRIMARY KEY,
  type_of_room VARCHAR (30)

);
insert into rooms values (1,1,"single");
insert into rooms values (2,1,"single");
insert into rooms values (3,1,"single");
insert into rooms values (4,1,"single");
insert into rooms values (5,1,"single");
insert into rooms values (6,1,"single");
insert into rooms values (1,2,"suit");
insert into rooms values (2,2,"suit");
