FROM nimmis/apache

MAINTAINER nimmis <kjell.havneskold@gmail.com>

# disable interactive functions
ENV DEBIAN_FRONTEND noninteractive

ADD . /app

RUN apt-get update && \
apt-get install -y php libapache2-mod-php  \
php-fpm php-cli php-mysqlnd php-pgsql php-sqlite3 php-redis \
php-apcu php-intl php-imagick php-mcrypt php-json php-gd php-curl \
php-mbstring php-xml git python-software-properties && \
phpenmod mcrypt && \
cd /tmp && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer \
&& rm -rf /var/www/html \
&& ln -s /app/public /var/www/html \
&& a2enmod rewrite && cp /app/000-default.conf /etc/apache2/sites-available && service apache2 restart \
&& curl -sL https://deb.nodesource.com/setup_8.x | bash && apt-get install nodejs \
&& rm -rf /var/lib/apt/lists/*

RUN /app/setup.sh