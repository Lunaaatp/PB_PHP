<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Livros</title>
</head>
<body>
    <h2>Livros</h2>
        <a href="/PB_PHP/SituacaoDeAprendizagem/livro/telaCadastro">Ir para a tela Cadastro</a>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano de Publicação</th>
            <th>Editora</th>
        </tr>
        <?php foreach($livros as $id => $u): ?>
            <tr>
                <td><?=$u['TITULO']?></td>
                <td><?=$u['AUTOR']?></td>
                <td><?=$u['ANO_PUBLICACAO']?></td>
                <td><?=$u['EDITORA']?></td>
                <td><a href="/PB_PHP/SituacaoDeAprendizagem/livro/telaEditar?id=<?=$u['ID']?>">Editar</a></td>
                <td><a href="/PB_PHP/SituacaoDeAprendizagem/livro/excluir?id=<?=$u ['ID']?>">Excluir</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>