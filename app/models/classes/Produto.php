<?php

class Produto {

    private int $id_produto;
    private int $id_loja;
    private string $nome;
    private string $descricao;
    private float $preco;
    private int $quantidade;
    private int $id_categoria;
    private $conexao;

    public function __construct($c) {
        $this->setConexao($c);
    }

   public function PesquisaProduto($p)
{
    $sql = "SELECT *
            FROM produto p
            INNER JOIN imagem_produto i
                ON p.id_produto = i.id_produto
            WHERE p.nome LIKE :valor";

    $stmt = $this->conexao->prepare($sql);
    $p = $p . "%";
    $stmt->bindParam(":valor", $p, PDO::PARAM_STR);
    $stmt->execute();
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $dados;
}
    


    
    // Getters e Setters


    public function getIdProduto(): int
    {
        return $this->id_produto;
    }

    public function setIdProduto(int $id_produto): void
    {
        $this->id_produto = $id_produto;
    }


    public function getIdLoja(): int
    {
        return $this->id_loja;
    }

    public function setIdLoja(int $id_loja): void
    {
        $this->id_loja = $id_loja;
    }


    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }


    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }


    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): void
    {
        $this->quantidade = $quantidade;
    }


    public function getIdCategoria(): int
    {
        return $this->id_categoria;
    }

    public function setIdCategoria(int $id_categoria): void
    {
        $this->id_categoria = $id_categoria;
    }

     public function getConexao(): int
    {
        return $this->conexao;
    }

    public function setConexao($conexao): void
    {
        $this->conexao = $conexao;
    }


}

?>