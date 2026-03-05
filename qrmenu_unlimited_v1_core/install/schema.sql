
CREATE TABLE IF NOT EXISTS users(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(255)
);

INSERT INTO users(username,password) VALUES('admin',MD5('123456'));

CREATE TABLE IF NOT EXISTS categories(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50)
);

INSERT INTO categories(name) VALUES('Хоол'),('Ундаа');

CREATE TABLE IF NOT EXISTS foods(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
price INT,
category_id INT
);

INSERT INTO foods(name,price,category_id) VALUES
('Burger',12000,1),
('Pizza',18000,1),
('Cola',4000,2);
