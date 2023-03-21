init: docker-down-clear docker-pull docker-build docker-up pr-init
up: docker-up
down: docker-down
restart: down up


docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

pr-init: pr-composer-install

pr-composer-install:
	docker-compose run --rm lead-php-cli composer install


