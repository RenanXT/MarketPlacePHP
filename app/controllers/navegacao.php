<?php
try {

    session_start();

    include_once __DIR__ . '/../../config/dataBase.php';
    include_once __DIR__ . '/../models/classes/Usuario.php';

    $pagina = $_GET['pagina'] ?? 'sair';
    $status = $_GET['status'] ?? '';


    include_once __DIR__ . '/controllerPages/login.php';

    include_once __DIR__ . '/controllerPages/cadastro.php';

    include_once __DIR__ . '/controllerPages/inicio.php';
    //proxima coisa que eu vou fazer 
    // vai ser a transição do banner na pagina de inicio!
    switch ($pagina) {

        case 'inicio':
            include_once __DIR__ . '/../views/pages/inicio.php';
            break;
        case 'carrinho':
            include_once __DIR__ . '/../../app/views/pages/carrinho.php';
            break;
        case 'produtos':
            include_once __DIR__ . '/../../app/views/pages/produtos.php';
            break;
        case 'perfil':
            include_once __DIR__ . '/../../app/views/pages/perfil.php';
            break;
        case 'notificacoes':
            include_once __DIR__ . '/../../app/views/pages/notificacoes.php';
            break;
        case 'login':
            include_once __DIR__ . '/../views/pages/login.php';
            break;
        case 'sair':
            include_once __DIR__ . '/../views/pages/login.php';
            session_destroy();
            break;
    }



} catch (PDOException $e) {
    echo '[ERRO] barraNav-> ' . $e . '';
}
?>