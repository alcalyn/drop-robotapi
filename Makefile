all: install logs

run:
	docker-compose up -d

install: run
	docker exec -ti robot-php sh -c "composer install"

update: run
	docker-compose up --force-recreate --build -d
	docker exec -ti robot-php sh -c "composer update"

logs: run
	docker-compose logs -ft

optimize_autoloader: run
	docker exec -ti robot-php sh -c "composer install --optimize-autoloader"

bash: run
	docker exec -ti robot-php bash
