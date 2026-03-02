<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Usuários</h2>
        <a href="/PB_PHP/MVC_exemplo/usuario/telaCadastro">Ir para tela Cadastrar </a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
            <th>Excluir</th>
        </tr>
        <?php foreach($usuarios as $id => $u): ?>
            <tr>
                <td><?=$u['nome']?></td>
                <td><?=$u['email']?></td>
                <td><a href="/PB_PHP/MVC_exemplo/usuario/telaEditar?id=<?= $id ?>">Editar</a></td>
                <td><a href="/PB_PHP/MVC_exemplo/usuario/excluir?id=<?= $id ?>">Excluir</a></td>
                
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>