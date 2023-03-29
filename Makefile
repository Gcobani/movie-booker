.PHONY: tests

default: build

build:
	docker-compose build

first:
	composer --working-dir=. install --no-scripts --ignore-platform-reqs
	docker-compose up --build -d
	sleep 10
	docker exec -i -t movie-booker-php php artisan migrate:refresh --seed

up:
	docker-compose up --build -d

down:
	docker-compose stop -t 1

restart:
	make down
	make up

shell_php:
	docker exec -i -t movie-booker-php sh
