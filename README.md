# **Mini CRM**

## **Requisitos previos**

Tener un WAMP, XAMPP u otro ambiente de desarrollo de PHP y MySQL.

Tener instalado Composer.

Tener instalado Node (NPM).

## **Instrucciones de instalación**

```php
git clone https://github.com/AdrianLopezIglesias/mini-crm.git
cd mini-crm
composer install
npm install
npm run dev
//Actualizar .env con datos de BD
php artisan storage:link
php artisan migrate
php artisan db:seed
php artisan serve
```

## Errores frecuentes

<<<<<<< HEAD
Si existe un error al realizar `php artisan serve`  es probable que el antivirus lo haya bloqueado. Quitarlo de cuarentena.
