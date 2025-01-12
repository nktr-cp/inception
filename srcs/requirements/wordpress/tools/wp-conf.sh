#!/bin/bash -x

echo "===> Getting wordpress configuration file..."
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

cd /var/www/html

echo "===> Configuring wordpress..."
wp core download --allow-root

DB_PASS=$(cat /run/secrets/db_user_password)
if ! wp core is-installed --allow-root; then
	wp core config \
		--dbhost=mariadb:3306 \
		--dbname=$DB_NAME \
		--dbuser=$DB_USER \
		--dbpass=$DB_PASS \
		--allow-root
fi

WP_ADMIN_PASS=$(cat /run/secrets/wp_admin_password)
if ! wp core is-installed --allow-root; then
	wp core install \
		--url="$DOMAIN_NAME" \
		--title="$WP_TITLE" \
		--admin_user="$WP_ADMIN_NAME" \
		--admin_password="$WP_ADMIN_PASS" \
		--admin_email="$WP_ADMIN_EMAIL" \
		--allow-root
fi

echo "===> Creating user..."
WP_USER_PASS=$(cat /run/secrets/wp_user_password)
if ! wp user list --allow-root | grep "$WP_USER_NAME"; then
wp user create \
	"$WP_USER_NAME" \
	"$WP_USER_EMAIL" \
	--role="$WP_USER_ROLE" \
	--user_pass="$WP_USER_PASS" \
	--allow-root
fi

## directory to store the pid file
mkdir -p /run/php

## -F: stay in the foreground
php-fpm7.4 -F
