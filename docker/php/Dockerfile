FROM php:7.1.14-fpm

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
RUN sed -i 's;http://archive.debian.org/debian/;http://deb.debian.org/debian/;' /etc/apt/sources.list
RUN apt-get -qq update -y && apt-get -qq install -y --no-install-recommends apt-utils

RUN apt-get install -qqy git curl wget unixodbc unixodbc-dev nano locate sudo mysql-client unzip

RUN apt-get update -y && apt-get install -qqy \
    freetds-bin \
    freetds-dev \
    freetds-common \
    libct4 \
    libsybdb5 \
    tdsodbc \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng12-dev \
    libldap2-dev \
    zlib1g-dev \
    libc-client-dev \
    libxml2-dev \
    libcurl3-dev \
    libpng-dev \
    libwebp-dev \
    libxpm-dev

RUN docker-php-ext-install mbstring

RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip

RUN docker-php-ext-configure gd --with-gd --with-webp-dir --with-jpeg-dir \
    --with-png-dir --with-zlib-dir --with-xpm-dir --with-freetype-dir \
    --enable-gd-native-ttf

COPY php.ini /usr/local/etc/php/
COPY www.conf /usr/local/etc/php-fpm.d/

RUN ln -s /usr/lib/x86_64-linux-gnu/libsybdb.a /usr/lib/ && \
    docker-php-ext-install pdo pdo_mysql pdo_dblib zip xml simplexml mcrypt ftp curl mysqli gd

RUN curl -sS https://getcomposer.org/installer | php && \
    chmod +x composer.phar && \
    mv composer.phar /usr/local/bin/composer

RUN echo "" >> ~/.bashrc && \
    export COMPOSER_ALLOW_SUPERUSER=1 && \
    export COMPOSER_MEMORY_LIMIT=-1 && \
    echo 'export PATH="~/.composer/vendor/bin:$PATH"' >> ~/.bashrc && \
    echo "alias composer='php -dmemory_limit=-1 /usr/local/bin/composer'" >> ~/.bashrc && \
    echo "alias compup='php -dmemory_limit=-1 /usr/local/bin/composer.phar update'" >> ~/.bashrc && \
    echo "alias comp='php -dmemory_limit=-1 /usr/local/bin/composer.phar'" >> ~/.bashrc && \
    echo "alias genent='php bin/console doctrine:generate:entity'" >> ~/.bashrc && \
    echo "alias genents='php bin/console doctrine:generate:entities AppBundle/Entity'" >> ~/.bashrc && \
    echo "alias scup='php bin/console doctrine:schema:update --force'" >> ~/.bashrc && \
    echo "alias cache='php bin/console cache:clear && php bin/console cache:clear --env=prod'" >> ~/.bashrc && \
    echo "alias transup='php bin/console loki:translation:update && php bin/console cache:clear'" >> ~/.bashrc && \
    echo "alias cc='php bin/console cache:clear'" >> ~/.bashrc && \
    echo "alias sym='php bin/console '" >> ~/.bashrc && \
    echo "alias gba='git branch -a'" >> ~/.bashrc && \
    echo "alias gbd='git branch -D'" >> ~/.bashrc

COPY docker-entrypoint.sh /bin/docker-entrypoint.sh
RUN chmod +x /bin/docker-entrypoint.sh

WORKDIR /var/www

ENTRYPOINT [ "/bin/docker-entrypoint.sh" ]

CMD [ "php-fpm", "-R" ]

EXPOSE 9000