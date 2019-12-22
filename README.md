# newsApp

News App é um sistema desenvolvido usando os principais conceitos do framework Laravel, como: mvc, migrations, eloquent ORM, seeds, routes, blade e banco de dados mysql. 



Ele simula os principais processos de gerenciamenteo de notícias, conforme as imagens abaixo:



**Listagem de notícias:**

![](https://github.com/JoaoLucasXavier/newsApp/blob/master/public/img/01.png)

**Cadastro de notícias:**

![](https://github.com/JoaoLucasXavier/newsApp/blob/master/public/img/02.png)

**Gestão de notícias:**

![](https://github.com/JoaoLucasXavier/newsApp/blob/master/public/img/03.png)





## Clonando e configurando o projeto no seu computador

Abaixo veremos como você pode executar a aplicação newsApp localmente em seu computador, já tendo em vista que você possui todas as ferramentas para desenvolvimento e execução de projetos php/laravel devidamente configuradas em seu computador. 

**Siga os seguintes passos:**



1. Clone o repositório do projeto newsApp do GitHub para o local desejado em seu computador

  

2. Navegue através da linha de comandos do seu terminal até o local do projeto. Você precisará estar dentro do projeto para inserir todo o restante dos comandos neste tutorial.

  

3. Instale as dependências com o composer: `composer install`

  

4. Configure o banco de dados mysql ou mariadb no arquivo `.env` localizado na raiz do projeto. Edite as seguintes linhas de configuração conforme o exemplo abaixo:

    `DB_CONNECTION=mysql`

    `DB_HOST=127.0.0.1`

    `DB_PORT=3306`

    `DB_DATABASE=news_app`

    `DB_USERNAME=your_mysql_user_here`

    `DB_PASSWORD=your_mysql_password_here`

  

5. Gere uma chave de criptografia de aplicativo com o comando: `php artisan key:generate`

   

6. Crie um banco de dados vazio para o appNews, Vá até seu gerenciador de banco de dados mysql/mariadb e execute a sequinte instrução sql:

   `create database if not exists news_app;`

   `use news_app;`

   

7. Faça a migração de dados da aplicação com o comando: `php artisan migrate`

   

8. Inicie o servidor com o comando: `php artisan serve`  e acesse a URI http://localhost:8000/ no seu browser!

   

Sinta-se a vontade para explorar o newsApp. Bom aproveito!
