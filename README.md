# <h1 align="center"> Lista de Jogos - Laravel </h1>
# <h1 align="center"> ![image](https://github.com/diegosilvaas/LaravelFramework/assets/122392637/bd2bb073-27c5-4937-b471-bfd10aca6d0b) </h1>


## Descrição do projeto
Este é um projeto desenvolvido utilizando o framework Laravel, que consiste em uma aplicação para a listagem de jogos. Com esta aplicação, é possível adicionar, alterar e excluir jogos da lista.

## Funcionalidades
#### ● Adicionar jogos: Os usuários podem adicionar novos jogos à lista, informando o nome, gênero, plataforma e uma breve descrição do jogo.
#### ● Editar jogos: Os usuários podem editar as informações de jogos existentes, permitindo atualizar o nome, categoria, lançamento e valor do jogo.
#### ● Excluir jogos: Os usuários têm a opção de remover jogos da lista.

## Requisitos de Instalação
Antes de executar a aplicação, certifique-se de ter os seguintes requisitos instalados em seu ambiente:

#### ● PHP >= 7.4
#### ● Composer
#### ● Laravel CLI

## Instalação
Siga as etapas abaixo para configurar e executar a aplicação:
#

#### 1. Clone este repositório para o seu ambiente local.
git clone https://github.com/seu-usuario/LaravelFramework.git
#
#### 2. Acesse o diretório do projeto.
cd nome-do-repositorio
#
#### 3. Instale as dependências do projeto utilizando o Composer.
composer install
#
#### 4. Crie um arquivo .env a partir do arquivo .env.example.
cp .env.example .env
#
#### 5. Gere uma nova chave de aplicação.
php artisan key:generate
#
#### 6. Configure o banco de dados no arquivo .env. Insira as informações de conexão do seu banco de dados.
#
#### 7. Execute as migrações do banco de dados para criar as tabelas necessárias.
php artisan migrate
#
#### 8. Inicie o servidor de desenvolvimento do Laravel.
php artisan serve
#
#### 9. Acesse a aplicação em seu navegador através do endereço 'http://localhost:8000'.
