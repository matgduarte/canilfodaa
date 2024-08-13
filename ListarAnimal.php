<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
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
    $sql = "SELECT * FROM Animal";
    $result = mysqli_query($con, $sql);
    ?>
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
            while($row = mysqli_fetch_array($result)) {
                $data = $row['data_nascimento'];
                $nasc = new DateTime($data);
                $atual = new DateTime();
                $idade = $atual->diff($nasc)->y;
                // Data no formato YYYY-MM-DD
                $data_original = $row['data_nascimento'];
                // Cria um objeto DateTime a partir da data original
                $data = new DateTime($data_original);
                // Formata a data para o formato DD-MM-YYYY
                $data_formatada = $data->format('d-m-Y');
                echo "<tr>";
                echo "<td>".$row['nome_animal']."</td>";
                echo "<td>".$row['especie']."</td>";
                echo "<td>".$row['raça']."</td>";
                echo "<td>".$row['data_nascimento']."</td>";
                echo "<td>".$idade."</td>";
                echo "<td>".($row['castrado'] == 1 ? 'Sim': 'Não')."</td>";
                echo "<td><a href='alteraAnimal.php?id=".$row['id_animal']."'>Alterar</a></td>";
                echo "<td><a href='deletarAnimal.php?id=".$row['id_animal']."'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        </main>
        <footer></footer>
    </div>
</body>

</html>