CREATE DATABASE IF NOT EXISTS prestashop;
CREATE USER IF NOT EXISTS 'lvintila' @'%' IDENTIFIED BY '007009';
GRANT ALL PRIVILEGES ON prestashop.* TO 'lvintila'@'%';
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root12345';
FLUSH PRIVILEGES;