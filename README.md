Bem-vindo ao projeto PHP-CRUD 01-2025!
Este é um projeto simples e didático de CRUD (Create, Read, Update, Delete), desenvolvido com PHP puro e integrado ao MySQL 8, utilizando Docker para facilitar a execução em qualquer ambiente.

Tecnologias Utilizadas
- PHP 8.1 (sem frameworks)
- MySQL 8
- Docker e Docker Compose
- phpMyAdmin

### Como Executar o Projeto
Siga os passos abaixo para rodar o projeto corretamente na sua máquina:

### 1. Pré-requisitos

É necessário ter o Docker instalado.
Recomendação: Docker Desktop (Windows/Mac) ou Docker Engine (Linux)
Link para download: https://www.docker.com/

### 2. Clonando o Repositório

Abra o terminal e execute:

git clone https://github.com/seu-usuario/php-crud-01-2025.git
cd php-crud-01-2025

### 4. Subindo os Containers

No diretório do projeto, execute o comando abaixo para construir e iniciar os serviços:

docker-compose up -d --build

### 5. Importando o Banco de Dados

Acesse o phpMyAdmin no seu navegador pelo endereço:

http://localhost:8082

Use as credenciais abaixo para login:

Servidor: mysql
Usuário: user
Senha: password

Após o login:

Selecione o banco de dados "php-crud" (ou crie um novo com esse nome)

Importe o arquivo .sql que está localizado na pasta /sql, na raiz do projeto

### 6. Acessando o Sistema

Após os containers estarem ativos e o banco importado, acesse o sistema CRUD pelo navegador:

http://localhost:82

### Observações
Certifique-se de que as portas 82 (aplicação) e 8082 (phpMyAdmin) estejam disponíveis no seu sistema.

Caso deseje alterar as configurações, edite os arquivos docker-compose.yml e, se necessário, os arquivos de ambiente.