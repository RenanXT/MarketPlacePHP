<?php

if (isset($_POST['btnCadastrar'])) {
    include_once __DIR__ . '/../views/pages/cadastro.php';
    exit;
}
if (isset($_POST['btnCriarConta'])) {
    include_once __DIR__ . '/../models/cadastro.php';
}

?>