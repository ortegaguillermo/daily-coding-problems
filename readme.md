## Daily coding problems

Applicaiton to practice about some topics that I want to review.

## License

This code is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Despues de llevar el repositorio a su ubicación final, asegurar existencia y permisos para ./bootstrap/cache.

# Instalar dependencias:

```bash
composer install;
```

# Asegurar existencia de archivo ./.env

```bash
cp .env.example .env
```

# Inmediatamente se debe hacer es actualizar las claves de cifrado de laravel y de jwt

```bash
php artisan key:generate;
```

# Ejecutar el archivo que crea la BDD

mysql -u root -ppassword -hpracticewebsite_db < /var/www/html/database/schema.sql; 

# Crear la base de datos deseada y cargar el archivo ./database/schema.sql

Configurar el archivo ./.env

php artisan migrate --force

Asegurar permisos a las carpetas de cache y de logs, generalmente debajo de ./storage


La configuración de logs tambien está en ./.env
