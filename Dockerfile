FROM php:8.2-apache

WORKDIR /var/www/html

# Enable Apache modules required by the existing .htaccess rules.
RUN a2enmod rewrite headers

# Allow .htaccess overrides in the document root.
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

COPY . /var/www/html/
COPY render-start.sh /usr/local/bin/render-start.sh

RUN chmod +x /usr/local/bin/render-start.sh

EXPOSE 10000

CMD ["render-start.sh"]
