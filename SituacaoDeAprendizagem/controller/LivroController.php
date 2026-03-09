<?php

session_start();
require_once"./Model/LivroModel.php";

class LivroController{
    public function telaCadastro(){
        require "View/LivroCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano_publicacao = $_POST['ano_publicacao'];
        $editora = $_POST['editora'];

        $livro = new Livro($titulo, $autor, $ano_publicacao, $editora);
        $livro->salvar();
        header('Location: /PB_PHP/SituacaoDeAprendizagem/livro/telaCadastro');
    }

    public function listarLivros(){
        $livros = Livro::listar();
        echo "<pre>";
        print_r($livros);
        echo "</pre>";
        require 'View/LivroListar.php';
    }

    public function telaEditar(){
        $livro = Livro::buscar($_GET['id']);
        require 'View/LivroEditar.php';
    }

    public function atualizar(){
        $livro = new Livro($_POST['titulo'], $_POST['autor'], $_POST['ano_publicacao'], $_POST['editora']);
        $livro->atualizar($_GET['id']);
        header('Location: /PB_PHP/SituacaoDeAprendizagem/?Livro/telaEditar?id=',($_GET['id']));
        exit;
    }

    public function excluir(){
        Livro::excluir($_GET['id']);
        header('Location: /PB_PHP/SituacaoDeAprendizagem/Livro/listar');
        exit;
    }
}