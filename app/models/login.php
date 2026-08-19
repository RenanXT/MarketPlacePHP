<?php

try {

    $Usuario = $_POST['txtUsuario'];
    $Senha = $_POST['txtSenha'];

    $user = new Usuario($conexao);
    $dados = $user->ConsultarUsuario($Usuario, $Senha);

    if (!empty($dados)) {
        var_dump($dados);
        $_SESSION['UsuarioSession'] = [
            'id_usuario' => $dados['id_usuario'],
            'nome' => $dados['nome'],
            'sobrenome' => $dados['sobrenome'],
            'nome_social' => $dados['nome_social'],
            'genero' => $dados['genero'],
            'telefone' => $dados['telefone'],
            'cpf_cnpj' => $dados['cpf_cnpj'],
            'data_nascimento' => $dados['data_nascimento'],
            'email' => $dados['email'],
            'usuario' => $dados['usuario'],
            'banner' => $dados['banner'],
            'pontuacao' => $dados['pontuacao'],
            'conexao' => $dados['conexao'],
        ];
        header("Location: index.php?pagina=inicio");
        exit;
    } else {
        echo '
<div class="position-absolute alert alert-dark border-dark alert-dismissible fade show d-flex align-items-center gap-2 py-2 px-3"
     style="z-index:1; top:20px; left:50px; font-size:0.9rem;">
    <p class="fw-bold m-0 flex-grow-1">Usuário ou senha incorretos</p>
    <button type="button" class="close btn btn-sm p-0 px-1" data-dismiss="alert" aria-label="Close" style="line-height:1;">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';

    }

} catch (PDOException $e) {
    echo '[ERRO INTERNO] ' . $e . '';
}

?>