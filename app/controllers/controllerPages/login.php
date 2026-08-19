<?php
if (isset($_POST['btnLogin'])) {
        include_once __DIR__ . '/../../models/login.php';
    }

    if (!empty($_SESSION['UsuarioSession'])) {
        $ID = $_SESSION['UsuarioSession']['id_usuario'];
        $NomeUser = $_SESSION['UsuarioSession']['nome'];
        $Sobrenome = $_SESSION['UsuarioSession']['sobrenome'];
        $NomeSocial = $_SESSION['UsuarioSession']['nome_social'];
        $Genero = $_SESSION['UsuarioSession']['genero'];
        $Telefone = $_SESSION['UsuarioSession']['telefone'];
        $CpfCnpj = $_SESSION['UsuarioSession']['cpf_cnpj'];
        $DataNascimento = $_SESSION['UsuarioSession']['data_nascimento'];
        $EmailUser = $_SESSION['UsuarioSession']['email'];
        $Usuario = $_SESSION['UsuarioSession']['usuario'];
        $Banner = $_SESSION['UsuarioSession']['banner'];
        $Pontuacao = $_SESSION['UsuarioSession']['pontuacao'];
    }
?>