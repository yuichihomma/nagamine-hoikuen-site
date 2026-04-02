FROM wordpress:latest

COPY php.ini /usr/local/etc/php/conf.d/uploads.ini

RUN a2enmod rewrite

RUN sed -i '/<Directory \/var\/www\/html\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf