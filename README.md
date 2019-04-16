# Laravel Blog

A simple laravel blog implementing user authentication for admins with a custom, headless CMS. Data is managed with a sqlite3 database. Front-end and interactive features developed using VueJS.

## Dependencies

* PHP
* Composer
* NodeJS

## Usage

Install dependencies

```shell
composer update
```

Create the database file

```shell
touch database/database.sqlite
```

Create the environment file

```shell
mv .env.example .env
```

Update the .env file to connect to eh sqlite3 database

```env
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database.sqlite
DB_USERNAME=
DB_PASSWORD=
```

Update the config/database.php file with the path to the database.sqlite file

```php
// ...
'default' => env('DB_CONNECTION', 'sqlite'),
'database' => database_path(env('DB_DATABASE', 'database.sqlite')),
// ...
```

Set database scheema

```shell
php artisan migrate --env=local
```

Generate the application encryption key

```shell
php artisan key:generate
```

Build front end dependencies

```shell
yarn
# once complete
yarn run watch
```


Serve the project

```shell
php artisan serve
```
