
start:
	php artisan serve

help:
	php artisan

cahe:
	php artisan view:clear

env:
	php -r "file_exists('.env') || copy('.env.example', '.env');"

ket:
	php artisan key:generate

port:
	sudo fuser -k 8000/tcp

git:
	git add .
	git commit -m "add feature - "
	git push

something:
	/usr/bin/node /usr/share/nodejs/npm/bin/npm-cli.js install --scripts-prepend-node-path=auto

migration:
	php artisan migrate

test:
	php artisan test

console:
	php artisan tinker

prepare:
	php artisan package:discover --ansi
	php artisan migrate

start:
	php artisan serve --host 0.0.0.0 --port 8080
