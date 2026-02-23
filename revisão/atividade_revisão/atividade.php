<?php 
    session_start();

    class Usuario{
        private $nome;
        private $sobrenome;
        private $nota;
        private $data_nasc;

        public function __construct($nome, $sobrenome, $nota, $data_nasc) {
            $this ->nome = $nome;
            $this ->sobrenome = $sobrenome;
            $this ->nota = $nota;
            $this ->data_nasc = $data_nasc;
        }

        public function salvar(){
            if(!isset($_SESSION ['alunos'])){
                $_SESSIO['alunos'] = [];
            }

            $_SESSION['alunos'][] = [
                'nome' => $this->nome,
                'sobrenome' => $this->sobrenome,
                'nota' => $this->nota,
                'data_nasc' => $this->data_nasc
            ];
        }
    }
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nota = $_POST['nota'];
        $data_nasc = $_POST['data_nasc'];

        $usuario = new Aluno($nome, $sobrenome, $nota, $data_nasc);
        $usuario -> salvar();
    }

    if(isset($_GET['reset'])){
        session_destroy();
    }

    echo"<pre>";
    print_r($_SESSION);
    echo"</pre>";

?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>
    <body>
        <h2 style="color:darkblue; font-family:Arial"> Cadastro de Aluno</h2>
        <form action="" method="POST" style="background:#f2f2f2; padding:15px border-radius 8px; width: 300px">
            Nome: <input type="text" name="nome" value="" style="width:100%; margin-bottom:10px"><br>
            Sobrenome: <input type="text" name="sobrenome" value="" style="width:100%; margin-bottom:10px"><br>
            Nota: <input type="number" name="nota" value="" style="width:100%; margin-bottom:10px"><br>
            Data: <input type="date" name="data" value="" style="width:100%; margin-bottom:10px"><br>
            <button type="submit" style="background:green; color:white; padding:5px 10px">Cadastrar</button>
            <button type="reset" style="background:red; color:white; padding:5px 10px">Limpar</button>
        </form>
        <?php if(isset($_SESSION['usuarios'])): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Nota</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['usuarios'] as $usuario): ?>
                <tr>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['sobrenome']?></td>
                    <td><?= $usuario['nota']?></td>
                    <td><?= $usuario['data']?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>