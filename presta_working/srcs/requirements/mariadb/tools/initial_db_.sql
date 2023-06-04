CREATE DATABASE IF NOT EXISTS prestashop;
CREATE USER 'root'@'localhost' IDENTIFIED VIA unix_socket 
  OR mysql_native_password USING 'invalid';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
GRANT PROXY ON ''@'%' TO 'root'@'localhost' WITH GRANT OPTION;
CREATE USER 'mysql'@'localhost' IDENTIFIED VIA unix_socket 
  OR mysql_native_password USING 'invalid';
GRANT ALL PRIVILEGES ON *.* TO 'mysql'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;