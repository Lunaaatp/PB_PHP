<?php

require_once "Controller/ProdutoController.php";

$produtoController = new ProdutoController();
$route = $_GET["route"] ?? '';

switch ($route) {
    case 'produto/telaCadastro':
        $produtoController->telaCadastro();
        break;
    
    case "produto/salvar":
        $produtoController->cadastrar();
        break;

    case "produto/listar":
        $produtoController->listarProdutos();
        break;

    default:
        echo "Página não encontrada";
        break;
}