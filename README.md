# Pasos para instalar este proyecto correctamente:
## 1.Descarga este proyecto o clónalo.
## 2.Ejecuta el comando:
composer install

## 3.Copiar el archivo ".env.example" y pegarlo con el nombre: ".env". Si estas con el sistema gitforwindows, o en linux o mac, puedes ejecutar el siguiente comando:
cp .env.example .env

## 4.Debemos generar una nueva llave de laravel con el siguiente comando:
php artisan key:generate

## 5.Configura la nueva base de datos modificando el archivo ".env":
DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE= DB_USERNAME= DB_PASSWORD=

## 6.Ejecuta php artisan migrate
## 7.Ejecuta npm install && npm run dev
si te da problemas, hazlo por separado npm install npm run dev
## 8. Ejecuta php artisan serve y prueba el proyecto que debe funcionar.

Api: http://127.0.0.1:8000/api/users
