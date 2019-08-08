CREATE DATABASE loginsystem;
CREATE TABLE users
(
idusers INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uidusers TINYTEXT NOT NULL,
emailusers TINYTEXT ,
pwdusers LONGTEXT NOT NULL
);

CREATE TABLE info
(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
username TINYTEXT NOT NULL,
age INT NOT NULL,
gender TINYTEXT NOT NULL,
weight INT NOT NULL,
bloodtype TINYTEXT NOT NULL
);

CREATE TABLE request(
id INT NOT NULL ,
username TINYTEXT NOT NULL,
blood TINYTEXT NOT NULL,
email TINYTEXT ,
phone INT NOT NULL,
age INT NOT NULL,
location TINYTEXT NOT NULL,
gender TINYTEXT NOT NULL,
breq INT NOT NULL,
urgency INT NOT NULL,
dor DATETIME NOT NULL
);

CREATE TABLE donorreq(
    id int not NULL,
    username tinytext not null,
    did int not null,
    phone TINYTEXT not null
)
