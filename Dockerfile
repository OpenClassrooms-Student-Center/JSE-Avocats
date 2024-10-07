FROM wordpress:6.1.1-php7.4

COPY --chmod=777 ./wp /var/www/html