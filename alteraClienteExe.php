<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nomec = $_POST['nomec'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $ativo = $_POST['ativo'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>
    
    <h1>Alteração de Cliente</h1>
    <button class="btn"><a href="./index.php">Voltar</a></button>
    <?php
    echo "<p>Nome do cliente: $nomec</p>";
    echo "<p>Senha: $senha</p>";
    echo "<p>Email: $email</p>";
    $sql = "UPDATE Cliente SET 
    nomec = '$nomec',
    senha = '$senha',
    email = '$email',
    ativo = '$ativo'
    WHERE id = $id";

    echo $sql;
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo "Dados atualizados";
    }
    else
    {
        echo "Erro ao atualizarar dados\n"
        .mysqli_error($con);
    }
    ?>
</body>
</html>