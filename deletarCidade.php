<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cidade</title>
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
    <h1>Deletar Cidade</h1>
    <?php 
    include('includes/conexao.php');

    // Verifica se o ID da cidade foi passado via GET
    if (isset($_GET['id_cidade'])) {
        $id_cidade = $_GET['id_cidade'];
        
        // Escapa o valor do ID para evitar SQL injection
        $id_cidade = mysqli_real_escape_string($con, $id_cidade);

        // Executa o comando de exclusão
        $sql = "DELETE FROM Cidade WHERE id_cidade = '$id_cidade'";
        $result = mysqli_query($con, $sql);
        
        // Verifica se a exclusão foi bem-sucedida
        if ($result) {
            echo "<h2>Dados deletados com sucesso!</h2>";
        } else {
            echo "<h2>Erro ao deletar os dados!</h2>";
            echo "<h2>" . mysqli_error($con) . "</h2>";
        }
    } else {
        echo "<h2>ID da cidade não fornecido!</h2>";
    }
    ?>
</main>
        <footer></footer>
    </div>
</body>

</html>