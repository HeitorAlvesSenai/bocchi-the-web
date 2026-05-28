FROM php:8.3-apache
# Define a imagem base do PHP 8.3 com Apache

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip
# Instala dependências do sistema e a extensão do PostgreSQL

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# Copia o instalador do Composer para dentro do container

WORKDIR /var/www/html
# Define a pasta principal da aplicação dentro do container

COPY . .
# Copia todos os arquivos do projeto para o container

RUN composer install --no-dev --optimize-autoloader
# Instala as dependências do Laravel em modo produção

RUN cp .env.example .env
# Cria o arquivo .env a partir do modelo (corrigido!)

RUN php artisan key:generate
# Gera a chave de criptografia da aplicação

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
# Define as permissões corretas para as pastas do Laravel

RUN a2enmod rewrite
# Ativa o módulo rewrite do Apache para as rotas funcionarem

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf
# Copia a configuração personalizada do servidor Apache

EXPOSE 80
# Libera a porta padrão da aplicação
