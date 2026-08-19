<?php
try {

    session_start();

    include_once __DIR__ . '/../../config/dataBase.php';
    include_once __DIR__ . '/../models/classes/Usuario.php';

    $pagina = $_GET['pagina'] ?? 'sair';
    $status = $_GET['status'] ?? '';


    include_once __DIR__ . '/controllerPages/login.php';

   
    switch ($pagina) {

        case 'inicio':
            include_once __DIR__ . '/../views/pages/inicio.php';
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