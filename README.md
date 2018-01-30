# Ejemplo de Docker

Este repositorio tiene la configuración base para levantar un entorno local usando Docker con Apache, PHP, MariaDB y Mailhog.

## Requisitos
Docker for Mac

## Instrucciones
Ejecuta el siguiente comando en terminal para levantar el entorno:

`docker-compose up -d`

Para apagar los contenedores ejecuta:

`docker-compose stop`

Para entrar a bash dentro del contenedor de Apache, usa el siguiente comando:

`docker exec -it ejemplo_container_php bash`

El contenido de la carpeta public dentro del repositorio estará reflejado a la carpeta `/var/www/html/public` del container de Apache.

Una vez funcionando, los siguientes servicios estarán disponibles:

Apache:
http://localhost:8180

MariaDB:
mysqld -uroot -p -h localhost:8106

Mailhog:
http://localhost:8125
