<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h2>Produtos</h2>
    <a href="/PB_PHP/ATIVIDADE01/produto/telaCadastro">Ir para tela Cadastrar </a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>valor</th>
            <th>quantidade</th>
        </tr>
        <?php foreach($produto as $p): ?>
            <tr>
                <td><?=$p['nome']?></td>
                <td><?=$p['valor']?></td>
                <td><?=$p['quantidade']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>