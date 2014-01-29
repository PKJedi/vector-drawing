curl -sS https://getcomposer.org/installer | php
php composer.phar install --dev
vendor/bin/phpcs --standard=PSR2 library/ test/
vendor/bin/phpunit --bootstrap test/bootstrap.php test
