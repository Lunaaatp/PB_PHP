<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    <a href="/PB_PHP/MVC_exemplo/usuario/listar">Ir para tela de Listar </a>
    
    <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled> 
        <input type="text" name="nome" value="<?=htmlspecialchars($usuario['nome'])?>" require>
        <input type="email" name="email" value="<?= htmlspecialchars($usuario['email'])?>"require>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>