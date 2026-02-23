<?php
    session_start();

    class Aluno{
        private $nome;
        private $sobrenome;
        private $nota;
        private $data_nasc;

        public function __construct($nome, $sobrenome, $nota, $data_nasc){
            $this -> nome = $nome;
            $this -> sobrenome = $sobrenome;
            $this -> nota = $nota;
            $this -> data_nasc = $data_nasc;
        }

          public function salvar(){
            if(!isset($_SESSION ['alunos'])){
                $_SESSION['alunos'] = [];
            }

            $_SESSION['alunos'][] = [
                'nome' => $this->nome,
                'sobrenome' =>$this->sobrenome,
                'nota' =>$this->nota,
                'data_nasc' =>$this->data_nasc
            ];
        }
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST['nome']; 
        $sobrenome = $_POST['sobrenome'];
        $nota = $_POST['nota'];
        $data_nasc = $_POST['data_nasc'];

        $aluno = new Aluno($nome, $sobrenome, $nota, $data_nasc);
        $aluno -> salvar();
    }

        if(isset($_GET['reset'])){
        session_destroy();
    }

    echo"<pre>";
    print_r($_SESSION);
    echo"</pre>";

    $media = $totalnotas / $qtnotas

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>
    <body>
        <h2> Cadastro de Alunos</h2>
        <form action="" method="POST" style= "padding:15px border-radius 8px; width: 300px">
            Nome:<input type="text" name="nome" value="" style="width:100%; margin-bottom:10px"><br>
            Sobrenome: <input type="text" name="sobrenome" value="" style="width:100%; margin-bottom:10px"><br>
            Nota: <input type="number" name="nota" value="" style="width:100%; margin-bottom:10px"><br>
            Data de Nascimento: <input type="date" name="data_nasc" value="" style="width:100%; margin-bottom:10px"><br>
            <button type="submit" style="padding:5px 10px">Cadastrar</button>
            <button type="reset" style="padding:5px 10px">Limpar</button>
        </form>
        <?php if(isset($_SESSION['alunos'])): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Nota</th>
                    <th>Data_nasc</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['alunos'] as $aluno): ?>
                <tr>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['sobrenome']?></td>
                    <td><?= $aluno['nota']?></td>
                    <td><?= $aluno['data_nasc']?></td>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>