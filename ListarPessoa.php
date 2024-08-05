
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta do Cliente</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>
    <?php
    include('includes/conexao.php');
    $sql = "SELECT * FROM Pessoa";
    $result = mysqli_query($con, $sql);
    ?>
    <div class="container">
        <h1>Consulta do Cliente</h1>
        <table align="center" border="1" width="500">
            <tr>
                <th>Nome do Cliente</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Cep</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['nome_cliente']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['endereço']."</td>";
                echo "<td>".$row['bairro']."</td>";
                echo "<td>".$row['id_cidade']."</td>";
                echo "<td>".$row['cep']."</td>";
                echo "<td><a href='alteraPessoa.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletarPessoa.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <button class="btn"><a href="./index.html">Voltar</a></button>
    </div>
</body>
</html>