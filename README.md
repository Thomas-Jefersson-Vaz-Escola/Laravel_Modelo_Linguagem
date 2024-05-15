# Laravel_Modelo_Linguagem
    #Instalação Laravel
docker context use default
curl -s "https://laravel.build/example-app?with=mysql,redis" | bash
   
    #iniciando
    cd {pasta}
 
     ./vendor/bin/sail up    - iniciar o container
     ./vendor/bin/sail artisan migrate  -iniciar o BD

    
     instalar o plugin Docker

     instalar o pacote breeze
     
     composer require laravel/breeze --dev
     php artisan breeze:install
 
        php artisan migrate

Configurar Vendor para rota localhost
vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php

   protected $proxies='*';


    #Views (layouts de páginas)
       nome.blade.php

    #Routes - rotas - fluxos da aplicação
     com/sem parâmetros ( enviar/ receber dados )


    #Migrations - Banco de dados
    cria e gerencia o banco de dados da aplicação


php artisan make:model -mrc produto


Este comando criará três arquivos para você:

app/Models/produto.php- O modelo Eloquente.
database/migrations/<timestamp>_create_produto_table.php- A migração do banco de dados que criará sua tabela de banco de dados.
app/Http/Controller/ProdutoController.php- O controlador HTTP que receberá solicitações recebidas e retornará respostas.

