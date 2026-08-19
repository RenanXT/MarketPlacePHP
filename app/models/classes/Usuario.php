<?php

try {
	class Usuario {
    private $id_usuario;
    private $nome;
    private $sobrenome;
    private $nome_social;
    private $genero;
    private $telefone;
    private $cpf_cnpj;
    private $data_nascimento;
    private $email;
    private $usuario;
    private $senha;
    private $banner;
    private $pontuacao;
    private $conexao;

 public function __construct($c) {
        $this->conexao = $c;
    }

    public function CadastrarUsuario($dados) {
   $sql = "INSERT INTO usuario (
    nome,
    sobrenome,
    genero,
    telefone,
    cpf_cnpj,
    data_nascimento,
    email,
    usuario,
    senha
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $this->conexao->prepare($sql);

$dados['txtSenha'] = password_hash($dados['txtSenha'], PASSWORD_DEFAULT);

if ($stmt->execute([
    $dados['txtNome'],
    $dados['txtSobrenome'],
    $dados['txtGenero'],
    $dados['txtTelefone'],
    $dados['txtCPF'],
    $dados['txtNascimento'],
    $dados['txtEmail'],
    $dados['txtUsuario'],
    $dados['txtSenha']
])) {
} 
    }
	
   public function ConsultarUsuario($U, $S) {
    $sql = "SELECT *
        	FROM usuario 
        	WHERE nome_social = :nome";

    $stmt = $this->conexao->prepare($sql);
    $stmt->bindParam(":nome", $U, PDO::PARAM_STR);
	$stmt->execute();
	$UsuarioLogado = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($UsuarioLogado) {
		if (password_verify($S, $UsuarioLogado['senha'])) {
		$senha = password_verify($S, $UsuarioLogado['senha']);
			return $UsuarioLogado;
		}

	} else {
		return false;
	}
}



    // Getters e Setters

	public function getId_usuario() {
		return $this->id_usuario;
	}

	public function setId_usuario($value) {
		$this->id_usuario = $value;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($value) {
		$this->nome = $value;
	}

	public function getSobrenome() {
		return $this->sobrenome;
	}

	public function setSobrenome($value) {
		$this->sobrenome = $value;
	}

	public function getNome_social() {
		return $this->nome_social;
	}

	public function setNome_social($value) {
		$this->nome_social = $value;
	}

	public function getGenero() {
		return $this->genero;
	}

	public function setGenero($value) {
		$this->genero = $value;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	public function setTelefone($value) {
		$this->telefone = $value;
	}

	public function getCpf_cnpj() {
		return $this->cpf_cnpj;
	}

	public function setCpf_cnpj($value) {
		$this->cpf_cnpj = $value;
	}

	public function getData_nascimento() {
		return $this->data_nascimento;
	}

	public function setData_nascimento($value) {
		$this->data_nascimento = $value;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($value) {
		$this->email = $value;
	}

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario($value) {
		$this->usuario = $value;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha($value) {
		$this->senha = $value;
	}

	public function getBanner() {
		return $this->banner;
	}

	public function setBanner($value) {
		$this->banner = $value;
	}

	public function getPontuacao() {
		return $this->pontuacao;
	}

	public function setPontuacao($value) {
		$this->pontuacao = $value;
	}

	public function getConexao() {
		return $this->conexao;
	}

	public function setConexao($value) {
		$this->conexao = $value;
	}
}
}catch (PDOException $e) {
     echo '[ERRO] barraNav-> ' . $e . '';
}
