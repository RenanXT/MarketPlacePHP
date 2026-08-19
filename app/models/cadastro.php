
<?php

try {
    $user = new Usuario($conexao);

if ($user->CadastrarUsuario($_POST)) {
  
     //to achando que nao ra redirecionando aqui por causa do switch no controller!!!!!
    exit;

}

} catch (PDOException $e) {
     echo '[ERRO] barraNav-> ' . $e . '';
}

?>