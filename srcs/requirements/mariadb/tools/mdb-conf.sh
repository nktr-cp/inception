#!/bin/bash -x

echo "===> Starting mariadb..."
service mariadb start
## ensure mariadb is running
## 5 seconds may not be enough
echo "===> Waiting for mariadb to start..."
sleep 5

## if database doesn't exist, create it
echo "===> Configuring mariadb..."
mariadb --execute "CREATE DATABASE IF NOT EXISTS $DB_NAME;"

DB_USER_PASS=$(cat /run/secrets/db_user_password)
mariadb --execute "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_USER_PASS';"

mariadb --execute "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%';"
mariadb --execute "FLUSH PRIVILEGES;"

## shutdown and restart to reflect changes
DB_ROOT_PASS=$(cat /run/secrets/db_root_password)
mysqladmin --user root --password=$DB_ROOT_PASS shutdown

echo "===> Finished configuring mariadb..."

## restart mariadb
echo "===> Restarting mariadb..."
## default port: 3306
## To allow connections from server, accept all incoming connections
mysqld_safe --bind-address=0.0.0.0 --datadir="/var/lib/mysql"
