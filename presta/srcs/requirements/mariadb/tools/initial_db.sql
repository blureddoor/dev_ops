CREATE DATABASE IF NOT EXISTS prestashop;
CREATE USER IF NOT EXISTS 'lvintila' @'localhost' IDENTIFIED BY 'adam';
GRANT ALL PRIVILEGES ON prestashop.* TO 'lvintila'@'localhost'IDENTIFIED BY 'adam';
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root12345';
FLUSH PRIVILEGES;