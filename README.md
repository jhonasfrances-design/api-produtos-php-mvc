# Framework MVC com PHP
Um simples projeto seguindo os padrões de apresentação Web MVC com PHP 7 puro.

Acesse o artigo no Medium clicando <a href="https://medium.com/@jardelgoncalves/construindo-um-simples-framework-mvc-com-php-349e9cacbeb1">aqui</a>

funcionamento do sistema:

URL → App (roteamento) → Controller → Model → Banco de Dados → Controller → View → Usuário

# Sistema de loja de celular

## Sobre o Projeto

Este projeto é um sistema web desenvolvido em PHP utilizando a arquitetura MVC (Model-View-Controller). O objetivo do sistema é permitir o gerenciamento de produtos, categorias e clientes de forma simples e organizada.

A aplicação foi construída sem frameworks externos, utilizando PHP Orientado a Objetos, PDO para acesso ao banco de dados MySQL e Bootstrap para a interface visual.

---

## Funcionalidades

### Dashboard

* Página inicial do sistema.
* Centraliza o acesso aos módulos disponíveis.

### Gerenciamento de Produtos

* Listar produtos cadastrados.
* Visualizar detalhes de um produto.
* Cadastrar novos produtos.
* Editar produtos existentes.
* Excluir produtos.

### Gerenciamento de Categorias

* Listar categorias cadastradas.
* Visualizar detalhes de uma categoria.
* Cadastrar novas categorias.
* Editar categorias existentes.
* Excluir categorias.
* Validação para impedir categorias duplicadas.

### Gerenciamento de Clientes

* Listar clientes cadastrados.
* Visualizar informações de um cliente.
* Cadastrar novos clientes.
* Editar clientes existentes.
* Excluir clientes.

---

## Arquitetura MVC

O sistema foi desenvolvido utilizando o padrão MVC (Model-View-Controller), que separa as responsabilidades da aplicação em três camadas principais.

### Model

Responsável pelo acesso ao banco de dados e execução das consultas SQL.

Exemplos:

* Product.php
* Category.php
* User.php

### View

Responsável pela interface visual apresentada ao usuário.

Exemplos:

* Formulários de cadastro
* Listagens
* Telas de visualização

### Controller

Responsável por receber as requisições, processar as regras de negócio e enviar os dados para as views.

Exemplos:

* Product.php
* Category.php
* User.php
* Home.php

---

## Fluxo de Funcionamento

O fluxo da aplicação segue a seguinte sequência:

URL → Controller → Model → Banco de Dados → View → Usuário

Exemplo:

1. O usuário acessa `/product`.
2. O Controller Product recebe a requisição.
3. O Controller chama o método `findAll()` do Model Product.
4. O Model executa a consulta SQL no banco de dados.
5. Os dados retornam para o Controller.
6. O Controller envia os dados para a View.
7. A View exibe as informações para o usuário.

---

## Estrutura do Projeto

```text
api/
├── controllers/
├── core/
├── database/
├── models/
├── views/
├── autoload.php

assets/
├── css/
├── js/

index.php
```

### Core

Contém as classes principais do framework:

* App.php: responsável pelo roteamento.
* Controller.php: classe base dos controllers.
* Database.php: responsável pela conexão com o banco de dados.

### Controllers

Controlam as ações da aplicação:

* Home
* Product
* Category
* User

### Models

Realizam as operações de banco de dados:

* SELECT
* INSERT
* UPDATE
* DELETE

### Views

Responsáveis pela interface apresentada ao usuário.

---

## Banco de Dados

O sistema utiliza MySQL como banco de dados.

Principais entidades:

### Categorias

Armazena as categorias dos produtos.

Exemplos:

* Notebooks
* Periféricos
* Monitores

### Produtos

Armazena os produtos cadastrados.

Campos principais:

* Nome
* Descrição
* Preço
* Estoque
* Categoria

### Clientes

Armazena os dados dos clientes cadastrados.

---

## Tecnologias Utilizadas

* PHP 8+
* MySQL
* PDO
* HTML5
* CSS3
* Bootstrap 5
* Bootstrap Icons
* JavaScript
* Arquitetura MVC

---

## Objetivo do Projeto

O principal objetivo deste projeto é aplicar conceitos de desenvolvimento web utilizando PHP Orientado a Objetos, arquitetura MVC, manipulação de banco de dados com PDO e organização de código em camadas, simulando o funcionamento de um sistema administrativo para gerenciamento de produtos de informática.

---

Desenvolvido para fins acadêmicos e de aprendizado em desenvolvimento web com PHP.
