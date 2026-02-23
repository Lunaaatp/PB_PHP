<?php

session_start();
require_once"./Model/ProdutoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/ProdutoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];

        $produto = new Produto($nome, $valor, $quantidade);
        $produto -> salvar();
        header('Location: /PB_PHP/ATIVIDADE01/produto/telaCadastro');
        exit;
    }

    public function listarProdutos(){
        $produto = Produto::listar();
        echo "<pre>";
        print_r($produto);
        echo"</pre>";
        require 'view/ProdutoListar.php';
    }
}