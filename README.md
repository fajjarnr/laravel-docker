Command

```sh
mkdir mysql
mkdir src
docker-compose run --rm composer create-project laravel/laravel .
docker-compose run --rm artisan migrate
docker-compose run --rm npm install
docker-compose run --rm npm run dev

cp .env.example .env
docker-compose run --rm artisan key:generate
```
