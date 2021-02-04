
cp .env .env.local

configure database information in .env.local

composer install

yarn install

php bin/console make:migration

php bin/console doctrine:migrations:migrate

php bin/console doctrine:fixtures:load

yarn encore dev

symfony server:start
