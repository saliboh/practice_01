cp src/.env.example src/.env
docker-compose run --rm composer install
docker-compose run --rm artisan key:generate
docker-compose run --rm artisan migrate:fresh
docker-compose run --rm artisan storage:link
