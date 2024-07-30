<?php
    include('includes/conexao.php');
    $id_cidade = $_POST['id_cidade'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
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
    <h1>Alteração de cidade</h1>
    <button class="btn"><a href="./index.php">Voltar</a></button>
    <?php
    include('includes/conexao.php');

    if (isset($_POST['id_cidade']) && isset($_POST['nome']) && isset($_POST['estado'])) {
        $id_cidade = $_POST['id_cidade'];
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];

        echo "<p>Nome: $nome</p>";
        echo "<p>Estado: $estado</p>";

        $sql = "UPDATE Cidade SET nome = '$nome', estado = '$estado' WHERE id_cidade = $id_cidade";

        echo "<p>$sql</p>";

        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "Dados atualizados com sucesso.";
        } else {
            echo "Erro ao atualizar os dados: " . mysqli_error($con);
        }
    } else {
        echo "Dados incompletos.";
    }
    ?>
</body>
</html>