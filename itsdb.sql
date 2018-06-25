CREATE database if not exists  itsdb;
USE itsdb;
CREATE TABLE IF NOT EXISTS news(id INT(25) unsigned AUTO_INCREMENT,
news TEXT NOT NULL,
UploadedDate TIMESTAMP NOT NULL,
PRIMARY KEY(id)
)TYPE=InnoDB DEFAULT CHARSET=latin1;

USE itsdb;
CREATE TABLE IF NOT EXISTS user(
       username VARCHAR(50) NOT NULL,
	   passwod VARCHAR(50) NOT NULL,
	   lastlogin TIMESTAMP NOT NULL,
	   PRIMARY KEY(username)  
)TYPE=InnoDB DEFAULT CHARSET=latin1;


