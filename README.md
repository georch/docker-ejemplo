# Ejemplo de Docker

Este repositorio tiene la configuración base para levantar un entorno local usando Docker con Apache, PHP, MariaDB y Mailhog.

## Requisitos
Docker for Mac

## Instrucciones

Copia y renombra el archivo .env.dist

`cp .env.dist .env`

Editar configuración

Edita el nuevo archivo .env y haz los cambios necesarios de acuerdo a tu proyecto. Por ejemplo, cambia el valor de HOST_NAME from ejemplo.local to misitio.local. Recuerda añadir la siguiente entrada en el archivo `/etc/hosts` de tu equipo:

`127.0.0.1	ejemplo.local www.ejemplo.local mailhog.ejemplo.local`

Ejecuta el siguiente comando en terminal para levantar el entorno:

`docker-compose up -d`

Para apagar los contenedores ejecuta:

`docker-compose stop`

Para entrar a bash dentro del contenedor de PHP, usa el siguiente comando:

`docker exec -it ejemplo_container_php bash`

Para ver el log de tu aplicación, usa el siguiente comando:

`docker logs -f ejemplo_container_php`

El contenido de la carpeta `public` del repositorio estará reflejado a la carpeta `/var/www/html` del contenedor de PHP y el dominio mostrará el contenido de dicho directorio.

Una vez funcionando, los siguientes servicios estarán disponibles:

Apache:
http://ejemplo.local

MariaDB (recuerda usar el puerto especificado en el archivo .env):
`mysql -uejemplo -p -h 127.0.0.1`

Mailhog:
http://mailhog.ejemplo.local
