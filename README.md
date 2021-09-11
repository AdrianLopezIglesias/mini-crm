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

Si existe un error al realizar `php artisan serve`  es probable que no se haya descargado `server.php`  por lo que se deberá agregar manualmente.

```php
//<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
```