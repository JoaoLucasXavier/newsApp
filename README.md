# newsApp

Então você encontrou um projeto legal do Laravel no Github.com e deseja usá-lo localmente para brincar com ele ou aprender com ele. Ou talvez você esteja seguindo outro projeto do DevMarketer e esteja tendo problemas para iniciar em um dos repositórios do github.

Este tutorial mostra as coisas padrão que você precisa fazer para clonar um repositório do github no computador local e configurá-lo para começar a trabalhar no seu sistema.

Além de clonar o repositório, isso significa que precisamos configurar o banco de dados, o arquivo env, a chave de criptografia e muito mais.

Então pegue seu repositório favorito e vamos cloná-lo e fazê-lo funcionar em seu sistema local.

1. Clone o repositório do GitHub para este projeto localmente
Se o projeto estiver hospedado no github, podemos usar o git no seu computador local para cloná-lo do github no seu computador local.

Nota: Certifique-se de ter o git instalado localmente no seu computador primeiro.

Encontre um local no seu computador onde você deseja armazenar o projeto. No meu caso, eu gosto de todos os meus projetos como uma pasta chamada sites/, então é onde eu executo o seguinte comando, que extrai o projeto do github e cria uma cópia dele no meu computador local no diretório de sites em outra pasta chamada “ Nome do Projeto". Você pode alterar o nome dessa pasta criada, alterando a última parte do snippet de código abaixo para corresponder ao nome para o qual você deseja que sua pasta seja chamada.

git clone linktogithubrepo.com/ projectName
Para obter o link para o repositório, visite a página do github e clique no botão verde “clonar ou baixar” no lado direito. Isso revelará um URL que você substituirá na parte linktogithub.com do snippet acima.

Clone do Github

Uma vez executado, você terá uma cópia do projeto no seu computador.

2. cd em seu projeto
Você precisará estar dentro desse arquivo de projeto para inserir todo o restante dos comandos neste tutorial. Portanto, lembre-se de digitar cd projectNamepara mover o local de trabalho do terminal para o arquivo do projeto que acabamos de criar. (É claro que substitua "projectName" no comando acima, pelo nome da pasta que você criou na etapa anterior).

3. [Opcional]: faça check-out da tag “Iniciar” para ter uma nova instalação do projeto (e não os arquivos finais)
Por padrão, você clonou todo o repositório git, que incluirá o projeto final. Se você está seguindo outro tutorial do DevMarketer, normalmente crio uma tag com o git, que marca o início do projeto para que você possa acompanhar os tutoriais deste site e do meu canal do YouTube.

Lembre-se de que esta etapa é opcional porque nem todos os repositórios git terão uma tag de início, mas a maioria dos tutoriais que eu criei para você terá uma tag de início. Caso contrário, você pode pular esta etapa.

É claro que você deseja começar do começo para aprender como fazer isso sozinho. Portanto, precisamos usar outra técnica git chamada "checkout" para fazer checkout no início do projeto, para que você tenha o mesmo código inicial que eu tenho no vídeo, permitindo que você me acompanhe nos próximos vídeos.

Usaremos o seguinte trecho de código para fazer "checkout" do ponto de partida que eu marquei com uma "tag". Estes são todos os termos do git com os quais você se familiarizará ao usar o git cada vez mais.

tags de verificação geral do git / tutorial start -b
Você pode alterar a última palavra ("tutorial" neste exemplo) para ser o nome da ramificação de trabalho de sua preferência. Isso fará o checkout da tag de início e a colocará em uma nova ramificação com o nome que você fornecer aqui. Isso permite que você trabalhe sem arruinar o código final no seu projeto (você sempre pode passar para a ramificação mestre do código final que enviei).

Se você não entende nada sobre git ou branches, basta usar o snippet de código exatamente como se lê aqui e funcionará bem.

4. Instale dependências do compositor
Sempre que você clona um novo projeto do Laravel, agora você deve instalar todas as dependências do projeto. É isso que realmente instala o Laravel, entre outros pacotes necessários para começar.

Quando executamos o compositor, ele verifica o composer.jsonarquivo que é enviado ao repositório do github e lista todos os pacotes do compositor (PHP) que o seu repositório exige. Como esses pacotes estão mudando constantemente, o código fonte geralmente não é enviado ao github, mas, em vez disso, deixamos o compositor manipular essas atualizações. Portanto, para instalar todo esse código-fonte, executamos o compositor com o seguinte comando.

instalação do compositor
5. Instale dependências do NPM
Assim como devemos instalar os pacotes do compositor para avançar, também devemos instalar os pacotes NPM necessários para avançar. Isso instalará o Vue.js, o Bootstrap.css, o Lodash e o Laravel Mix.

É exatamente como na etapa 4, onde instalamos os pacotes PHP do compositor, mas estamos instalando os pacotes Javascript (ou Nó) necessários. A lista de pacotes que um repositório requer está listada no packages.jsonarquivo enviado ao repositório do github. Assim como na etapa 4, não confirmamos o código-fonte desses pacotes no controle de versão (github) e, em vez disso, deixamos o NPM lidar com isso.

instalação npm
ou se você preferir fios (como eu)

fio
6. Crie uma cópia do seu arquivo .env
.envos arquivos geralmente não são confirmados no controle de origem por motivos de segurança. Mas existe .env.exampleum modelo do .envarquivo que o projeto espera que tenhamos. Portanto, faremos uma cópia do .env.examplearquivo e criaremos um .envarquivo que podemos começar a preencher para fazer coisas como a configuração do banco de dados nas próximas etapas.

cp .env.example .env
Isso criará uma cópia do .env.examplearquivo no seu projeto e nomeará a cópia simplesmente .env.

7. Gere uma chave de criptografia de aplicativo
O Laravel exige que você tenha uma chave de criptografia de aplicativo que geralmente é gerada e armazenada aleatoriamente em seu .envarquivo. O aplicativo usará essa chave de criptografia para codificar vários elementos do seu aplicativo, de cookies a hashes de senha e muito mais.

Felizmente, as ferramentas de linha de comando do Laravel facilitam a geração disso. No terminal, podemos executar este comando para gerar essa chave. (Certifique-se de que você já instalou o Laravel via compositor e criou um arquivo .env antes de fazer isso, dos quais fizemos os dois).

chave do artesão php: gerar
Se você verificar o .envarquivo novamente, verá que agora ele possui uma longa sequência aleatória de caracteres no APP_KEYcampo. Agora temos uma chave de criptografia de aplicativo válida.

8. Crie um banco de dados vazio para nosso aplicativo
Crie um banco de dados vazio para o seu projeto usando as ferramentas de banco de dados de sua preferência (o meu favorito é o SequelPro para mac). No nosso exemplo, criamos um banco de dados chamado "test". Basta criar um banco de dados vazio aqui, as etapas exatas dependerão da configuração do sistema.

9. No arquivo .env, adicione informações do banco de dados para permitir que o Laravel se conecte ao banco de dados
Queremos permitir que o Laravel se conecte ao banco de dados que você acabou de criar na etapa anterior. Para isso, precisamos adicionar as credenciais de conexão no arquivo .env e o Laravel manipulará a conexão a partir daí.

No preenchimento arquivo .env na DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, e DB_PASSWORDopções para coincidir com as credenciais do banco de dados que você acabou de criar. Isso nos permitirá executar migrações e propagar o banco de dados na próxima etapa.

10. Migrar o banco de dados
Depois que suas credenciais estiverem no arquivo .env, agora você poderá migrar seu banco de dados.

artesão php migrar
Não é uma má idéia verificar seu banco de dados para garantir que tudo migrou da maneira esperada.

11. [Opcional]: propague o banco de dados
Se o seu repositório tiver uma configuração de arquivo de propagação, agora é a hora de executar a semente, que preenche seu banco de dados com dados iniciais ou simulados. Se o repositório não mencionar a existência de um arquivo de semeador, pule esta etapa.

Após a conclusão das migrações e a estrutura do banco de dados necessária, você pode propagar o banco de dados (o que significa adicionar dados fictícios a ele).

php artesão db: semente
Muitos dos repositórios criados para os tutoriais aqui no DevMarketer criarão 25 usuários gerados aleatoriamente e 100 postagens geradas aleatoriamente em seu banco de dados. Se você deseja fazer login como usuário, pegue um endereço de e-mail no banco de dados e use "secret" como senha para fazer login como esse usuário. Essa é a senha padrão que geralmente uso.

Todas essas informações geralmente estão contidas no arquivo leia-me do GitHub, portanto, verifique-as ao iniciar um novo projeto a partir de um repositório do Github.
