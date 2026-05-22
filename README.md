# Framework MVC com PHP

Um simples projeto seguindo os padrões de apresentação Web MVC com PHP 7.

# 📌 Tecnologias Utilizadas

- PHP 7.0
- CSS3 / Bootstrap
- HMTL5
- Banco de Dados MySQL


# 🎯 Objetivos do Projeto

O objetivo de um projeto usando o padrão MVC (Model–View–Controller) com PHP é organizar o desenvolvimento da aplicação web de forma estruturada, separando responsabilidades e facilitando manutenção, escalabilidade e reutilização de código.

No seu caso, esse projeto tem como objetivo principal:

- Criar uma aplicação web em PHP 7 seguindo arquitetura MVC;
- Separar:
   - Model → regras de negócio e acesso ao banco MySQL;
   - View → interface visual com HTML5, CSS3 e Bootstrap;
   - Controller → controle das requisições e comunicação entre Model e View;
- Melhorar organização do código;
- Facilitar manutenção e evolução do sistema;
- Aplicar boas práticas de desenvolvimento web;
- Demonstrar integração entre PHP e banco de dados MySQL.



# 🚀 Como Executar o Projeto

## 1. Pré-requisitos

Antes de iniciar, instale:
- PHP 7.x
- MySQL
- Servidor Apache
- Composer (opcional)

Uma opção mais simples é utilizar:
- XAMPP
- WampServer
- Laragon

## 2. Clonar o Projeto

Faça o clone dentro das pastas "/htdocs" (XAMPP) ou "/www" (WAMP). Com o terminal aberto em uma das pastas, é só executar o código abaixo.
```bash git clone [https://github.com/seu-usuario/html-css-basico.git](https://github.com/thayslcorrea/api-produtos-php-mvc) ```

## 3. Iniciar os Serviços

Abra o painel do XAMPP/Wamp e inicie:
- Apache
- MySQL


## 4. Criar o Banco de Dados

- Abra o navegador: http://localhost/phpmyadmin
- Importe o arquivo SQL do projeto: database.sql

## 5. Configurar a Conexão com o Banco

- Localize o arquivo de configuração: api/core/Database.php
- Configure:

<?php
$host = "localhost";
$db   = "produtos_informatica";
$user = "root"; (ou troque pelo usuário personalizado do seu servidor, caso exista.)
$pass = ""; (ou troque pela senha personalizada do seu servidor, caso exista.)
?>

## 6. Configurar URL Base (se necessário)

Em alguns projetos MVC existe uma constante:

define('BASE_URL', 'http://localhost/api-produtos-php-mvc/');

Configure com o nome correto da sua pasta (onde o projeto se localiza no seu computador).


## 7. Executar o Projeto

Abra no navegador:

http://localhost/api-produtos-php-mvc


## 8. Estrutura Básica do Projeto MVC
project/
│
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── public/
├── config/
├── core/
└── index.php
