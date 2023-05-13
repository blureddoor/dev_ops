#!/bin/bash

# Start the service
service mysql start

# Check if the database needs to be initialized
if [ ! -d "/var/lib/mysql/prestashop" ]; then
    mysql < /var/www/initial_db.sql
    rm -f /var/www/initial_db.sql
fi
# Run the main command
exec "$@"