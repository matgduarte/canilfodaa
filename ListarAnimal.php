
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta do Animal</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>
    <?php
    include('includes/conexao.php');
    $sql = "SELECT * FROM Animal";
    $result = mysqli_query($con, $sql);
    ?>
    <div class="container">
        <h1>Consulta do Animal</h1>
        <table align="center" border="1" width="500">
            <tr>
                <th>Nome do Animal</th>
                <th>Especie</th>
                <th>Raça</th>
                <th>Data de Nascimento</th>
                <th>Idade</th>
                <th>Castrado</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            $idade = (new DateTime())->diff(new DateTime('data_nascimento'))->y;
            list($ano, $mes, $dia)= explode("-",'data_nascimento');
            $idade = $dia + "/" + $mes + "/" + $ano;
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['nome_animal']."</td>";
                echo "<td>".$row['especie']."</td>";
                echo "<td>".$row['raça']."</td>";
                echo "<td>".$row['data_nascimento']."</td>";
                echo "<td>".$idade."</td>";
                if($row['castrado'] == 1)
                {
                    echo "<td>"."Sim"."</td>";
                } else if ($row['castrado'] == 0)
                {
                    echo "<td>"."Não"."</td>";
                }
                
                echo "<td><a href='alteraAnimal.php?id=".$row['id_animal']."'>Alterar</a></td>";
                echo "<td><a href='deletarAnimal.php?id=".$row['id_animal']."'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <button class="btn"><a href="./index.html">Voltar</a></button>
    </div>
</body>
</html>