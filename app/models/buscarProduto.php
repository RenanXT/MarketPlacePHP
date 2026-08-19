<?php
include_once('../models/classes/Produto.php');
include_once __DIR__ . '/../../config/dataBase.php';

$input = $_GET['nome'];
$produto = new Produto($conexao);
$lista = $produto->PesquisaProduto($input);

header("Content-type: application/json");
echo json_encode($lista);

?>