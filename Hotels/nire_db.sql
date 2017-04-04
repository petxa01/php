create table Employees(
  Nan VARCHAR (9) PRIMARY KEY,
  Name TEXT(50),
  Surname1 Text(50),
  surname2 text(50),
  phone int(9),
  email VARCHAR(50),
  gender text(50),
  Job_Type VARCHAR(50),
  User_name VARCHAR(50),
  user_pw VARCHAR(50),
  UNIQUE (User_name)
  UNIQUE (user_pw)


);
create table Customers(
  Nan VARCHAR (9) PRIMARY KEY,
  Name TEXT(50),
  Surname1 Text(50),
  surname2 text(50),
  phone int(9),
  email VARCHAR(50),
  gender text(50),
  Payment_method VARCHAR(50),
  User_name VARCHAR(50),
  user_pw VARCHAR(50),
  UNIQUE (User_name)
  UNIQUE (user_pw)

);
create table Rooms{

  }
