<?php

class Produto{
    private $nome;
    private $valor;
    private $quantidade;

    public function __construct ($nome, $valor, $quantidade){
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
    }

    public function salvar(){
        if(!isset($_SESSION['produtos'])){
            $_SESSION['produtos'] = [];
        }

        $_SESSION['produtos'][] = [
            'nome' => $this->nome,
            'valor'=> $this->valor,
            'quantidade'=> $this->quantidade
        ];
    }

    public static function listar(){
        return $_SESSION['produtos'] ??[];
    }

    public static function buscar($id){
        return $_SESSION['produtos'][$id] ?? null;
    }

    public function atualizar($id){ //verifica se o usuário existem
        if(isset($_SESSION['produtos'][$id])){ //atualizar com novos dados
            $_SESSION['produtos'][$id] = [
                'nome' => $this->nome,
                'valor' => $this->valor,
                'quantidade' => $this->quantidade,
            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION['produtos'][$id])){
            unset($_SESSION['produtos'][$id]);
        }
    }

}
