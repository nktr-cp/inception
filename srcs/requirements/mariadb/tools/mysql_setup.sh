#!/bin/bash

mysql_install_db
mysqld

# split with init.sql
# because appropriate time to wait for mysql to start
# depends on the system environment
