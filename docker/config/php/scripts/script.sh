#!/bin/bash
php-fpm &
php artisan queue:work &
php artisan horizon &


wait -n

exit$?