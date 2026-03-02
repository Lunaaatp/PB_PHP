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
    

    public function telaEditar(){
        $produto = Produto::buscar($_GET['id']); //busca na URL
        require 'View/produtoEditar.php';
    }

    public function atualizar(){
        $produto = new Produto($_POST['nome'], $_POST['valor'], $_POST['valor']);
        $produto->atualizar($_GET['id']);
        header('Location: /PB_PHP/ATIVIDADE01/produto/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Produto::excluir($_GET['id']);
        header('Location: /PB_PHP/ATIVIDADE01/produto/listar');
        exit;
    }

}
