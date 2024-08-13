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

if (isset($_POST['id_animal'], $_POST['nome_animal'], $_POST['especie'], $_POST['raça'], $_POST['data_nascimento'], $_POST['dono'])) {
    $id_animal = $_POST['nome_animal'];
    $nome_animal = $_POST['nome_animal'];
    $especie = $_POST['especie'];
    $raça = $_POST['raçaa'];
    $data_nascimento = $_POST['data_nascimento'];
    $castrado = isset($_POST['castrado']) ? 1 : 0;
    $dono = $_POST['dono'];

    $sql = "UPDATE Animal SET nome_animal = '$nome_animal', especie = '$especie', raça = '$raça', data_nascimento = '$data_nascimento', castrado = $castrado, id_pessoa = $dono WHERE id_animal = $id_animal";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<h2>Dados do animal alterados com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao alterar dados!</h2>";
        echo "<p>" . mysqli_error($con) . "</p>";
    }
} else {
    echo "<h2>Dados incompletos.</h2>";
}
?>
        </main>
        <footer></footer>
    </div>
</body>

</html>