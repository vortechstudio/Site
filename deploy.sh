#!/bin/bash

ENV_VARS=$1
PATH_DEPLOY=$2
SLACK_WEBHOOK_URL=$3
DEPLOY_STATUS="success"

send_slack_notification() {
    STATUS=$1
    MESSAGE="Déploiement sur ${ENV} ${STATUS}."
    curl -X POST -H 'Content-type: application/json' --data "{'text':'${MESSAGE}'}" $SLACK_WEBHOOK_URL
}

cd "$PATH_DEPLOY" || exit

echo "$ENV_VARS" > .env

composer install --ignore-platform-reqs --no-interaction --prefer-dist
touch vendor/autoload.php

echo "Installation des packages NPM & Build des systèmes"
npm i
npm run build

echo -e "${HC}Initialisation de l'instance laravel${NC}"

php artisan key:generate
php artisan storage:link
echo -e "${SC}Permissions accordées${NC}"
echo -e "${HC}Vérification et initialisation de la base de donnée${NC}"
php artisan migrate --force

if [ "$DEPLOY_ENV" = 'staging' ]; then
    php artisan db:seed --class=TestSeeder --force
fi

echo -e "${HC}Migration Terminer${NC}"

chmod -R 777 bootstrap/cache storage/
php artisan optimize:clear

if [ $? -ne 0 ]; then
    DEPLOY_STATUS="échoué"
fi

send_slack_notification $DEPLOY_STATUS
