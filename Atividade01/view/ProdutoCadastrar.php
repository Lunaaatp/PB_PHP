<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário Cadastro</title>
</head>
<body>
    <a href="/PB_PHP/ATIVIDADE01/produto/listar">Ir para tela de Listar </a>
    <form method="POST" action="salvar">
        <input type="text" name="nome" placeholder="Nome" require>
        <input type="number" name="valor" placeholder="Valor" require>
        <input type="number" name="quantidade" placeholder="Quantidade" require>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>