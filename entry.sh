#!/bin/bash

# Start the service
service mysql start

# Wait for MySQL to start up
while ! mysqladmin ping --silent; do
    sleep 1
done

# Check if the database needs to be initialized
if [ ! -d "/var/lib/mysql/prestashop" ]; then
    # Ensure the SQL script file exists
    if [ ! -f "/var/www/initial_db.sql" ]; then
        echo "Error: /var/www/initial_db.sql not found."
        exit 1
    fi

    # Execute the SQL script with mysql client
    # Replace 'root' and 'password' with your actual username and password
    mysql -u lvintila -adam < /var/www/initial_db.sql

    # Check the execution status of the last command, exit in case of error
    if [ $? -ne 0 ]; then
        echo "Error: Failed to execute /var/www/initial_db.sql."
        exit 1
    fi

    rm -f /var/www/initial_db.sql;
fi

# Run the main command
if [ -z "$@" ]; then
    echo "No command to execute."
else
    exec "$@"
fi
