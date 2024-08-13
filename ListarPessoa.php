<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
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
    $sql = "SELECT * FROM Pessoa";
    $result = mysqli_query($con, $sql);
    ?>
        <h1>Consulta do Cliente</h1>
        <table align="center" border="1" width="500">
            <tr>
                <th>Nome do Cliente</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cep</th>
                <th>Cidade</th>
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
                echo "<td>".$row['cep']."</td>";
                echo "<td>".$row['id_cidade']."</td>";
                echo "<td><a href='alteraPessoa.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletarPessoa.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        </main>
        <footer></footer>
    </div>
</body>

</html>