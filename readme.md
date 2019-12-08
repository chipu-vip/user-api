## Install

-   docker-compose up -d --force-recreate --build && docker-compose up

## run migration script

### open new terminal

-   docker-compose exec app php artisan migrate:refresh --seed

## Login information

-   you can create new or just login by existing account
-   admin@gmail.com/12345678

## Web access

-   http://localhost:8000

### if cannot run on localhost, try docker-machine ip and replace localhost to ip

## Api access

-   Method : GET
-   URL : http://localhost:8000/api/contents?message_code=%22MSG_CODE%22&message_type=%22MSG_TYPE%22
