
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
    $sql = "SELECT * FROM Cliente";
    $result = mysqli_query($con, $sql);
    ?>
    <div class="container">
        <h1>Consulta do Cliente</h1>
        <table align="center" border="1" width="500">
            <tr>
                <th>Nome do Cliente</th>
                <th>Senha</th>
                <th>Email</th>
                <th>Ativo</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['nomec']."</td>";
                echo "<td>".$row['senha']."</td>";
                echo "<td>".$row['email']."</td>";
                if($row['ativo'] == 1)
                {
                    echo "<td>"."Ativo"."</td>";
                } else if ($row['ativo'] == 0)
                {
                    echo "<td>"."Inativo"."</td>";
                }
                
                echo "<td><a href='alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletarCliente.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <button class="btn"><a href="./index.php">Voltar</a></button>
    </div>
</body>
</html>