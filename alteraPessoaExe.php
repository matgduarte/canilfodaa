<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
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
            include('../include/conexao.php');

            if (isset($_POST['id_pessoa'], $_POST['nome_pessoa'], $_POST['email'])) {
                $id_pessoa = $_POST['id_pessoa'];
                $nome_pessoa = $_POST['nome_pessoa'];
                $email = $_POST['email'];
                $endereço = $_POST['endereço'];
                $bairro = $_POST['bairro'];
                $cep = $_POST['cep'];
                $id_cidade = $_POST['id_cidade'];

                $sql = "UPDATE Pessoa SET nome_pessoa='$nome_pessoa', email='$email', endereço='$endereço', bairro='$bairro', cep='$cep', id_cidade='$id_cidade' WHERE id_pessoa=$id_pessoa";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    echo "<h2>Dados alterados com sucesso!</h2>";
                } else {
                    echo "<h2>Erro ao alterar!</h2>";
                    echo "<p>" . mysqli_error($con) . "</p>";
                }
            } else {
                echo "<h2>Nenhum dado enviado.</h2>";
            }
        ?>
        </main>
        <footer></footer>
    </div>
</body>

</html>