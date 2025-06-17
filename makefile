
#=========================================== BEGIN::exec docker app ============================
docker-aksarayotta-start:
	docker compose -f docker-compose.yml up -d
#stop docker aksarayotta
docker-aksarayotta-stop:
	docker compose -f docker-compose.yml down
#list docker aksarayotta
docker-aksarayotta-container:
	docker compose -f docker-compose.yml ps
#list docker images
docker-aksarayotta-images:
	docker image ls
#restart docker aksarayotta
docker-aksarayotta-restart:
	docker compose -f docker-compose.yml restart
#logs docker aksarayotta
docker-aksarayotta-logs:
	docker compose -f docker-compose.yml logs -f
#build docker aksarayotta
docker-aksarayotta-build:
	docker compose -f docker-compose.yml build app

#================================================== migration ========================================
docker-aksarayotta-migrate:
	docker compose -f docker-compose.yml exec app php artisan migrate
	docker compose -f docker-compose.yml exec app php artisan db:seed
docker-aksarayotta-migrate-rollback:
	docker compose -f docker-compose.yml exec app php artisan migrate:rollback
#exec run migrate refresh
docker-aksarayotta-refresh:
	docker compose -f docker-compose.yml exec app php artisan migrate:refresh
	docker compose -f docker-compose.yml exec app php artisan db:seed
#exec run seeder
docker-aksarayotta-seed:
	docker compose -f docker-compose.yml exec app php artisan db:seed
#exec app docker via composer install
docker-aksarayotta-composer:
	docker compose -f docker-compose.yml exec app composer install
#=========================================== END::exec docker app ============================


#=========================================== BEGIN::exec local app ============================
#run app aksarayotta via shell
aksarayotta-serve-port:
	php -S localhost:8089 -t public
aksarayotta-serve:
	php artisan serve
#migrate schema
aksarayotta-migrate:
	php artisan migrate
	php artisan db:seed
#seed database
aksarayotta-seed:
	php artisan db:seed
#refresh schema and seed
aksarayotta-refresh:
	php artisan migrate:refresh
	php artisan db:seed
#rollback schema
aksarayotta-rollback:
	php artisan migrate:rollback
#generate key
aksarayotta-key-generate:
	php artisan key:generate
aksarayotta-config-refresh:
	php artisan route:clear
	php artisan config:clear
	php artisan cache:clear
	php artisan view:clear
aksarayotta-composer-dump-autoload:
	composer dump-autoload
aksarayotta-config-optimize:
	php artisan optimize
#=========================================== END::exec local app ============================