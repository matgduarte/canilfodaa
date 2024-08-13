<?php
    include('includes/conexao.php');

    if (isset($_GET['id_animal'])) {
        $id_animal = $_GET['id_animal'];
        $sql = "SELECT * FROM Animal WHERE id_animal = $id_animal";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo "Animal não encontrada.";
            exit;
        }
    } else {
        echo "ID do animal não fornecido.";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Animal</title>
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
                    <form action="CadastroAnimalExe.php" method="post">
                        <h2>Cadastro do Animal</h2>
                        <div class="form-group">
                        <input type="text" name="nome_animal" id="nome_animal" required value="<?php echo $row['nome_animal']?>">
                            <label for="nome_animal">Nome do Animal</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="especie" id="especie" required value="<?php echo $row['especie']?>">
                            <label for="especie">Especie</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="raça" id="raça" required value="<?php echo $row['raça']?>">
                            <label for="raça">Raça</label>
                        </div>
                        <div class="form-group2">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" id="data_nascimento" required value="<?php echo $row['data_nascimento']?>">
                        </div>
                        <div class="form-group3">
                        <input type="checkbox" id="castrado" name="castrado" value="1" <?php echo ($castrado == 1 ? 'checked' : ''); ?> />
                        <label for="castrado">Castrado</label>
                        </div>
                        <div class="form-group2">
                        <label for="dono">Dono:</label>
                        <select name="dono" id="dono">
                            <?php
                            include('include/conexao.php');
                            $sql = "SELECT * FROM Pessoa";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value='" . $row['id_pessoa'] . "'>" . $row['nome_pessoa'] . " / " . $row['email'] . "</option>";
                            }
                            ?>
                        </select>
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