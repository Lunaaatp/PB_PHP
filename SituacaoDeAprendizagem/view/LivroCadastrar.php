<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário Cadastro de Livros</title>
</head>
<body>
    <a href="/PB_PHP/SituacaoDeAprendizagem/livro/listar">Ir para a tela de Listar</a>
    <form method="POST" action="salvar">
        <input type="text" name="titulo" placeholder="Título do livro" require>
        <input type="text" name="autor" placeholder="Autor" require>
        <input type="text" name="ano_publicacao" placeholder="Ano de publicação" require>
        <input type="text" name="editora" placeholder="Editora" require>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>