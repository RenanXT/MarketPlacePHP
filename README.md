# MarketPlacePHP

Projeto de e-commerce desenvolvido com PHP.

O projeto foi feito com o objetivo de construir um e-commerce PHP que simula as funcionalidades de um marketplace, tais como um sistema de conta com gerenciamento e personalização, toda a logística de compra e venda de produtos, um ambiente para que os usuários se comuniquem entre si e com o próprio sistema, e uma interface intuitiva e agradável para o manuseio de suas funcionalidades. Além de que o projeto serve como um ambiente para que eu possa aplicar novas habilidades e conhecimentos adquiridos.

## Tecnologias Usadas

- HTML
- CSS
- JavaScript
- PHP
- MySQL
- Bootstrap

## Conceitos aplicados

- MVC
- POO
- Versionamento com Git

## Descrição do Projeto

Marketplace Web desenvolvido com PHP seguindo o padrão MVC e integrado ao banco de dados MySQL. O sistema fornece ao usuário um ambiente e experiência completa de um e-commerce, possibilitando ao usuário realizar diversas operações, tais como:

- Sistema de Login e Cadastro com integração completa ao banco de dados;
- Listagem de produtos à venda;
- Possibilidade de compra pelos usuários;
- Cadastro do catálogo de lojas para gerar parcerias;
- Sistema interno de notificações;
- Gerenciamento de perfil do usuário;
- Personalização de informações pessoais e visuais do site;
- Área de suporte.

# Explicação do sistema

O sistema funciona na estrutura MVC e, em todo momento, se mantém em `index.php`, somente incluindo as páginas quando necessário.

O fluxo acontece da seguinte forma.

## Sistema de navegação

O sistema é acessado por meio do `index`.

É chamado o controller principal, que serve para gerenciar e organizar os controllers das páginas isoladas.

Dentro do controller principal é criada uma session para guardar os dados de login.

São incluídos os arquivos do banco de dados e da classe `Usuario`.

Por meio de uma variável `pagina` da URL, é controlado o avanço das páginas, inicialmente atribuído o valor `sair`.

A variável é jogada em uma estrutura `switch` para decidir o destino da página.

## Sistema de login

O sistema pega o valor da variável da URL e, caso for `sair`, prossegue para a view de login.

Os dados são enviados para o controller por meio de um formulário.

O botão de envio é referenciado dentro do controller principal e inclui a model do login caso seja enviado.

Com base nos dados do formulário, é criado um objeto de `Usuario`, chamando o método `ConsultarUsuario` para coletar os dados no banco.

Depois disso, é criada uma session com os dados do usuário para serem usados por toda a página e descartados ao se desconectar. Após isso, a URL é redirecionada com o valor `inicio` para seguir a navegação lógica do sistema.

## Sistema de cadastro

A página de cadastro é acessada pelo formulário da view de login.

Dessa vez, o acesso é liberado pelo controller próprio da página de cadastro na navegação e não pela variável da URL.

Uma vez incluída a página na view de cadastro, o usuário pode enviar um formulário para inserir um registro no banco de dados.

Os dados são inseridos pelo método `CadastrarUsuario` da classe `Usuario` após instanciar um objeto da classe.

## Sistema de pesquisa pela barra de navegação

Dessa vez, a lógica é escrita em funções JS ao invés de PHP para permitir que a busca dos produtos não exija o recarregamento da página.

É adicionado um evento `input` para ser chamado a cada tecla pressionada.

Primeiramente, é separada a `div` do bloco dos produtos e a barra de pesquisa, e então as ações são separadas em funções.

O controller é onde fica a lógica principal da busca. É chamado o método Ajax para cada novo valor inserido na barra de pesquisa.

Os dados são tratados em um arquivo PHP que envia como parâmetro na URL o valor digitado na barra. Então, é criada uma instância da classe `Produto`, que segue chamando o método `PesquisaProduto`, que seleciona todos os registros semelhantes ao que for digitado, e o valor é devolvido em JSON.

Após isso, é criada a `const "modelo"` para ser clonada de acordo com o tamanho do JSON da pesquisa, e então os dados dos produtos são inseridos por uma estrutura de repetição.

Para garantir que não haja produtos duplicados na visualização final, a variável da `div` é "limpa" antes de chamar a função controller.

> Obs.: tive que manter a `const modelo` fora da `div` para não ser limpa também.
