Laravel 10 + Vuejs + Test Unity

Step by step
Clone Repository

git clone [https://github.com/especializati/setup-docker-laravel.git](https://github.com/thiagolll/todo-list-laravel)

Create the .env File

cp .env.example .env
Update .env file environment variables

APP_NAME="Crud Laravel"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

Upload the project containers
docker-compose up -d

Access the container
docker-compose exec app bash

Install project dependencies
composer install

Generate Laravel project key
php artisan key:generate

Exit to exit the container

Run npm install

Access the project http://localhost:8989
