build:
	docker-compose build --no-cache --force-rm

create-network:
	docker network create food-delivery

up:
	docker-compose up app -d
	docker-compose up db -d

app-up:
	docker-compose up app -d

down:
	docker-compose down app
	docker-compose down db

app-down:
	docker-compose down app

app-run:
	docker-compose exec app php artisan serve --host 0.0.0.0 --port 8000

dependencies:	
	docker exec FoodDeliveryBackApp composer update
	docker exec FoodDeliveryBackApp composer install

db-create:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'DROP DATABASE IF EXISTS FoodDeliveryBack;'"
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'CREATE DATABASE FoodDeliveryBack;'"

db-seed:
	docker exec FoodDeliveryBackApp php artisan migrate
	docker exec FoodDeliveryBackApp php artisan passport:install
	docker exec FoodDeliveryBackApp php artisan db:seed --class=PratosSeeder
	docker exec FoodDeliveryBackApp php artisan db:seed --class=UserSeeder




do-it-all: # build it all and run it all at once with only this command
	@make build
	@make create-network
	@make up
	@make dependencies
	@make db-create
	@make db-seed



# utils for docker and mysql

see-all-dbs:
	docker-compose exec db sh -c "mysql -u root -p -e 'SHOW DATABASES;'"
