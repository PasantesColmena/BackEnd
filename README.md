
## Notas

Ejecutar el frontend y backend simultaneamente para que funcione toda la aplicacion web.

# Laravel

Este proyecto fue generado con [laravel] versión 4.2.9.

## Instalación de paquetes

Ejecute `npm install`.

## Creación de basee de datos 

"DB_USERNAME y DB_PASSWORD estan en `.env`"

ejecute `mysql -u'DB_USERNAME' -p` al ejecutar esto pide la contraseña `Enter password: 'DB_PASSWORD'`, ya dentro de mysql ejecute el siguiente comando `create database Agenda;`, ya para finalizar ejecute `exit`.

## Migración de datos

Ejecute `php artisan migrate` para cargar los campos y los valores de la tabla. Se puede visualizar en MySQL workbench.

## Servidor de desarrollo 

Ejecute `php artisan serve` para poner en funcionamiento el servidor. 


