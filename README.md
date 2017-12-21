**docker-php5.3-apache2.2-mysql5.3-phpMyAdmin2.11**

Oldschool php5 development environment with docker-compose:
- php 5.3
- apache 2.2
- mysql 5.1
- phpMyAdmin 2.11

**Install**

Clone the repo and rename it to for example my_app.

Edit .env to your personal preferences: \
CONTAINER_PREFIX=my_app \
WWW_PORT=8080 \
PHPMYAMDIN_PORT=8081 \
MYSQL_PORT=8082 \
MYSQL_DATABASE=my_app_db \
MYSQL_ROOT_PASSWORD=root \
MYSQL_USER=my_app \
MYSQL_PASSWORD=root

Cd to dir /my_app and run it: \
/my_app$ `docker-compose up`

App: http://127.0.0.1:8080 

Phpmyadmin: http://127.0.0.1:8081


