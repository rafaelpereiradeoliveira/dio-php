<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Formulario de Inscricao</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>

    <p>Formulario para inscricao de competidor.</p>
<?php
    
    $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? 
        $_SESSION['mensagem-de-sucesso'] : '';
    if(!empty($mensagemDeSucesso))
    {
        echo $mensagemDeSucesso;
    }

    $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ?
        $_SESSION['mensagem-de-erro'] : '';
    if(!empty($mensagemDeErro))
    {
        echo $mensagemDeErro;
    }
?>

    <form action="script.php" method="post">
        <p>Your name: <input type="text" name="nome" /></p>
        <p>Your age: <input type="text" name="idade" /></p>
        <p><input type="submit" /></p>
    </form>

</body>

</html>
