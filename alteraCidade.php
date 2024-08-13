<?php
    include('includes/conexao.php');

    if (isset($_GET['id_cidade'])) {
        $id_cidade = $_GET['id'];
        $sql = "SELECT * FROM Cidade WHERE id_cidade = $id_cidade";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo "Cidade não encontrada.";
            exit;
        }
    } else {
        echo "ID da cidade não fornecido.";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidade</title>
    <link rel="stylesheet" href="header_footer.css">
    <link rel="stylesheet" href="cadastro.css">
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
                                <li><a href="CadastroPessoa.php">
                                        <p>Cadastro</p>
                                    </a></li>
                                <li><a href="ListarPessoa.php">
                                        <p>Consulta</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <p>Animal</p>
                            <ul class="submenu">
                                <li><a href="CadastroAnimal.php">
                                        <p>Cadastro</p>
                                    </a></li>
                                <li><a href="ListarAnimal.php">
                                        <p>Consulta</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <p>Cidade</p>
                            <ul class="submenu">
                                <li><a href="CadastroCidade.php">
                                        <p>Cadastro</p>
                                    </a></li>
                                <li><a href="ListarCidade.php">
                                        <p>Consulta</p>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="main">
            <div class="form-box">
                    <form action="alteraCidadeExe.php" method="post">
                        <h2>Cadastro de Cidade</h2>
                        <div class="form-group">
                        <input type="text" name="nome" id="nome" required value="<?php echo htmlspecialchars($row['nome']); ?>">
                        <label for="nome">Nome da Cidade</label>
                </div>
                <div class="form-group2">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" required>
                        <option value="SP" <?php echo ($row['estado'] == "SP") ? "selected" : ""; ?>>SP</option>
                        <option value="RJ" <?php echo ($row['estado'] == "RJ") ? "selected" : ""; ?>>RJ</option>
                        <option value="MG" <?php echo ($row['estado'] == "MG") ? "selected" : ""; ?>>MG</option>
                        <option value="ES" <?php echo ($row['estado'] == "ES") ? "selected" : ""; ?>>ES</option>
                    </select>
                </div>
                <div>
                    <input type="hidden" name="id_cidade" value="<?php echo $row['id_cidade']; ?>">
                </div>
                <div class="form-group4">
                            <button type="submit" class="btn">Cadastrar</button>
                        </div>
            </form>
            </div>
        </div>
    </div>

</body>

</html>