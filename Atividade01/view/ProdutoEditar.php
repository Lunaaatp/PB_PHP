<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar Produto</h2>
    <a href="/PB_PHP/ATIVIDADE01/produto/listar">Ir para tela de Listar</a>

    <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="nome" value="<?=htmlspecialchars($produto['nome'])?>" require>
        <input type="number" name="valor" value="<?= htmlspecialchars($produto['valor'])?>"require>
        <input type="number" name="quantidade" value="<?= htmlspecialchars($quantidade['quantidade'])?>"require>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>