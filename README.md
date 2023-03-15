<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Como rodar o código

Para rodar o código, você deverá instalar as seguintes ferramentas: 

- PHP
- Composer
- Laravel

Após a instalação das ferramentas, clone o repositório e rode o "composer install" para instalar as dependências.

## Testando a api

⚠️ Para testar a api, você deverá instalar o Postman ou o Insomnia. ⚠️

Após instalar todas as dependências do projeto, vá até a pasta do projeto e execute o seguinte comando: "php artisan serve". 

Abra o Postman (ou o Insomnia), selecione o método post e insira a seguinte url: "http://127.0.0.1:8000/api/post/pizza". Clique no botão "Body", selecione "raw" e após isso, clique no botão azul "Text" e selecione "JSON". Agora, basta inserir um JSON no campo abaixo.
