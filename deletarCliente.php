<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Deletar Cliente</h1>
    <?php 
    include('includes/conexao.php');

    // Verifica se o ID da cidade foi passado via GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // Escapa o valor do ID para evitar SQL injection
        $id = mysqli_real_escape_string($con, $id);

        // Exibe o ID da cidade para depuração
        echo "<p>ID o cliente recebido: $id</p>";

        // Executa o comando de exclusão
        $sql = "DELETE FROM Cliente WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        
        // Verifica se a exclusão foi bem-sucedida
        if ($result) {
            echo "<h2>Dados deletados com sucesso!</h2>";
        } else {
            echo "<h2>Erro ao deletar os dados!</h2>";
            echo "<h2>" . mysqli_error($con) . "</h2>";
        }
    } else {
        echo "<h2>ID do cliente não fornecido!</h2>";
    }
    ?>
    <button class="btn"><a href="./index.php">Voltar</a></button>
</body>
</html>