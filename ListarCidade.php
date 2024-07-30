<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Cidade</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>
    <?php
    include('includes/conexao.php');
    $sql = "SELECT * FROM Cidade";
    $result = mysqli_query($con, $sql);
    ?>
    <div class="container">
        <h1>Consulta de Cidade</h1>
        <table align="center" border="1" width="500">
            <tr>
                <th>Nome da Cidade</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($row['estado']) . "</td>";
                echo "<td><a href='alteraCidade.php?id=" . htmlspecialchars($row['id_cidade']) . "'>Alterar</a></td>";
                echo "<td><a href='deletarCidade.php?id_cidade=" . htmlspecialchars($row['id_cidade']) . "'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <button class="btn"><a href="./index.php">Voltar</a></button>
    </div>
</body>
</html>
