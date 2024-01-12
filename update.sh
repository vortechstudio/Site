#!/bin/bash

ENV=$1

if [ "$ENV" == "staging" ]; then
    echo "Deploying DEV environment"
    php artisan down
    php artisan migrate:fresh --seed --force
    php artisan db:seed --class=TestSeeder --force
    php artisan optimize:clear
    php artisan up
elif [ "$ENV" == "production" ]; then
    echo "Deploying PROD environment"
    php artisan down
    php artisan migrate --force
    php artisan optimize:clear
    php artisan up
else
    echo "Unknown environment"
fi
