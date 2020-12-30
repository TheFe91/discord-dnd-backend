#!/bin/sh
set -e

echo "composer && symfony"
php -dmemory_limit=-1 /usr/local/bin/composer install --quiet --no-interaction
php bin/console doctrine:schema:update --force
php bin/console assets:install

echo "finished"
exec "$@"