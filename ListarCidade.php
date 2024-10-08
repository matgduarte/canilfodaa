<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="header_footer.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <p>Canil da Prefeitura</p>
            </div>
            <div>
                <nav class="">
                    <ul class="menu">
                        <li>
                            <p>Pessoa</p>
                            <ul class="submenu">
                                <li><a href="CadastroPessoa.php"><p>Cadastro</p></a></li>
                                <li><a href="ListarPessoa.php"><p>Consulta</p></a></li>
                            </ul>
                        </li>
                        <li>
                            <p>Animal</p>
                            <ul class="submenu">
                                <li><a href="CadastroAnimal.php"><p>Cadastro</p></a></li>
                                <li><a href="ListarAnimal.php"><p>Consulta</p></a></li>
                            </ul>
                        </li>
                        <li>
                            <p>Cidade</p>
                            <ul class="submenu">
                                <li><a href="CadastroCidade.php"><p>Cadastro</p></a></li>
                                <li><a href="ListarCidade.php"><p>Consulta</p></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
    <?php
    include('includes/conexao.php');
    $sql = "SELECT * FROM Cidade";
    $result = mysqli_query($con, $sql);
    ?>
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
                echo "<td>" . htmlspecialchars($row['nome_cidade']) . "</td>";
                echo "<td>" . htmlspecialchars($row['estado']) . "</td>";
                echo "<td><a href='alteraCidade.php?id=".$row['id_cidade']."'>Alterar</a></td>";
                echo "<td><a href='deletarCidade.php?id=".$row['id_cidade']."'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        </main>
        <footer></footer>
    </div>
</body>

</html>