<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Animal</title>
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
    <h1>Deletar Animal</h1>
    <?php 
    include('includes/conexao.php');

    // Verifica se o ID do animal foi passado via GET
    if (isset($_GET['id_animal'])) {
        $id_animal = $_GET['id_animal'];
        
        // Escapa o valor do ID para evitar SQL injection
        $id_animal = mysqli_real_escape_string($con, $id_animal);

        // Executa o comando de exclusão
        $sql = "DELETE FROM Animal WHERE id_animal = '$id_animal'";
        $result = mysqli_query($con, $sql);
        
        // Verifica se a exclusão foi bem-sucedida
        if ($result) {
            echo "<h2>Dados deletados com sucesso!</h2>";
        } else {
            echo "<h2>Erro ao deletar os dados!</h2>";
            echo "<h2>" . mysqli_error($con) . "</h2>";
        }
    } else {
        echo "<h2>ID do Animal não fornecido!</h2>";
    }
    ?>
</main>
        <footer></footer>
    </div>
</body>

</html>