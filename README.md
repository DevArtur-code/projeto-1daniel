# Projeto 1 - Cadastro Clientes + Produtos

Tema: Produtos (CRUD adicional)

Banco de dados: `sistema_cadastro`

## Estrutura
- index.php               -> Página inicial / menu
- conexao.php             -> Conexão com MySQLi (usar PHP 8)
- style.css               -> Estilos simples
- clientes/               -> CRUD de Clientes (list, inserir, editar, excluir)
- produtos/               -> CRUD de Produtos (list, inserir, editar, excluir)
- database.sql            -> Script SQL para criar o banco e tabelas

## Instruções rápidas
1. Importar o arquivo `database.sql` no MySQL (por exemplo, usando phpMyAdmin ou linha de comando).
2. Ajustar `conexao.php` com usuário/senha do MySQL.
3. Colocar todos os arquivos no diretório do servidor (ex: `www` ou `htdocs`) e acessar `index.php`.
4. CRUDs disponíveis:
   - Clientes: /clientes/index.php
   - Produtos: /produtos/index.php

## Observações
- Projeto escrito para PHP 8+ usando MySQLi.
- Use ambiente local (XAMPP, WAMP, LAMP) para rodar.
