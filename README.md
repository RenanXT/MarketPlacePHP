# MarketPlacePHP ( Em Andamento )

Projeto de e-commerce desenvolvido com PHP



O projeto foi feito com o objetivo de construit um e-commerce PHP que simula as funcionalidades de um marketPlace, tais como um sistema de conta com gerenciamento e personalização, toda a logistica de compra e venda de produtos, um ambiente para que os usuarios se comuniquem entre si e com o proprio sistema, e uma interface intuitiva e agradavel para o manuseio de suas funcionalidades. Alem de que o projeto serve como um ambiente para que eu possa aplicar novas habilidades e conhecimentos adquiridos.



## Tecnologias Usadas


HTML

CSS

JavaScript

PHP

MySQL

Bootstrap


## Conceitos aplicados

MVC

POO

Versionamente com Git



## Descrição do Projeto

Marketplace Web desenvolvido com PHP seguindo o padrão MVC e integrado ao banco de dados MySQL. O sistema fornece ao usuario um ambiente e exeperiencia completa de um e-commerce, possibilitando o usuario a realizar operações tais como:



Sistema de Login e Cadastro integração completa com banco de dados. Listagem de produtos a venda Possibilidade de compra pelos usuarios Cadastro do catalogo de lojas para gerar parecerias sistema interno de notificações; gerenciamento de perfil do usuário; personalização de informações pessoais e visuais do site; área de suporte;

# Explicação do sistema 
O sistema funciona na estrutura MVC e em todo momento se mantém em index.php, somente incluindo as paginas qunado necessario.

O fluxo acontece da seguinte forma.

## Sistema de navegação
o sistema é acessado por meio do index 

é chamado o controller principal que serve para gerenciar e organizar os controllers das paginas isoladas

dentro do controller principal é criada uma session para guardar os dados de login

são incluidos os arquivos do banco de dados e da classe usuario

por meio de uma varaivel " pagina " da URL é controlado o avanço das paginas, inicialmente atribuido o valor de sair
a variavel é jogada em uma estrutura switch para decidir o destino da pagina 

## Sistema de login
o sistema pega o valor da varaivel da URL e caso for " sair " prossegue para a view de login

os dados sao enviados para o controller por meio de um formulario

o botao de envio é referenciado dentro do controller principal e inclui a model do login caso seja enviado

com base nos dados do formulario é criado um objeto de Usuario chamando o metodo ConsultarUsuario para coletar os dados no banco

depois disso é criada uma session com os dados do usuario para serem usados por toda a pagina e descartados ao se desconectar, apos isso a URL é redireciona com o valor o " inicio " para seguir a navegacao logica do sistema

## Sistema de cadastro
a pagina de cadastro é acessada pelo formulario da view de login

dessa vez o acesso é liberado pelo controller proprio da pagina de cadastro na navegaao e não pela variavel da URL

uma vez incluida a pagina a view de cadastro o usuario pode enviar um formulario para inserir um registro no banco de dados 

os dados sao inseridos pelo metodo CadastrarUsuario da classe usuario apos instanciar um objeto da classe









