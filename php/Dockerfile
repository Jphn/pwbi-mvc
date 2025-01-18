# Use uma imagem PHP com suporte ao Apache
FROM php:8.2-apache

# Instale extensões necessárias (como PDO MySQL)
RUN docker-php-ext-install pdo pdo_mysql

# Habilite o módulo Rewrite do Apache
RUN a2enmod rewrite
