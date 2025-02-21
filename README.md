# desafio-ss-digital
🚀 Projeto

Este projeto é composto por uma aplicação Web(html) em PHP conectado a um banco de dados PostgreSQL rodando em um contêiner Docker.

📋 Requisitos

Certifique-se de ter os seguintes requisitos instalados:

Docker

Docker Compose


🔧 Configuração do Ambiente

Clone este repositório:

git clone https://github.com/Emersonovidio/desafio-ss-digital

cd desafio-ss-digital


🐳 Configuração do Docker

Suba os contêineres do banco de dados:

docker-compose up -d

Verifique se o banco de dados está rodando:

docker ps


Execute o comando:

php -S localhost:8000

A aplicação estará disponível em http://localhost:8000/login.


🛠️ Comandos Úteis

Parar os contêineres Docker:

docker-compose down

Reiniciar os contêineres:

docker-compose restart

Limpar cache do Laravel:

php artisan cache:clear 

php artisan config:clear 

php artisan route:clear

📜 Licença

Este projeto está licenciado sob a MIT License.