## Install

-   docker run --rm -v \$(pwd):/app composer install
-   docker-compose up

## run migration script

### open new terminal

-   docker-compose exec app php artisan migrate:refresh --seed

## Login information

-   you can create new or just login by existing account
-   admin@gmail.com/12345678

## Web access

-   http://localhost:8000

## Api access

-   Method : GET
-   URL : http://localhost:8000/api/contents?message_code=%22MSG_CODE%22&message_type=%22MSG_TYPE%22
