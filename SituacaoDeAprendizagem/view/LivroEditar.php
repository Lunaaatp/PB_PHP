<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar Livros</h2>
    <a href="/PB_PHP/SituacaoDeAprendizagem/livro/listar">Ir para a tela de Listar</a>

    <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="titulo" value="<?= htmlspecialchars($livro['TITULO'])?>" require>
        <input type="text" name="autor" value="<?= htmlspecialchars($livro['AUTOR'])?>" require>
        <input type="text" name="ano_publicacao" value="<?= htmlspecialchars($livro['ANO_PUBLICACAO'])?>" require>
        <input type="text" name="editora" value="<?= htmlspecialchars($livro['EDITORA'])?>" require>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>