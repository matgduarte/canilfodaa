
<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM Cliente WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Pessoa</title>
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
        <div class="main">
            <div class="form-box">
            <form action="alteraPessoaExe.php" method="post">
                <h2>Cadastro do Cliente</h2>
                <div class="form-group">
                    <input type="text" name="nome_pessoa" id="nome_pessoa" required value="<?php echo $row['nome_pessoa']?>">
                    <label for="nome_pessoa">Nome do Cliente</label>
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="email" required value="<?php echo $row['email']?>">
                    <label for="email">Email</label>
                </div>
                <div class="form-group">
                    <input type="text" name="endereço" id="endereço" required value="<?php echo $row['endereço']?>">
                    <label for="endereço">Endereço</label>
                </div>
                <div class="form-group">
                    <input type="text" name="bairro" id="bairro" required value="<?php echo $row['biarro']?>">
                    <label for="bairro">Bairro</label>
                </div>
                <div class="form-group">
                    <input type="text" name="cep" id="cep" required value="<?php echo $row['cep']?>">
                    <label for="cep">CEP</label>
                </div>
                <div class="form-group2">
                <label for="cidade">Cidade:</label>
                    <select name="cidade" id="cidade">
                    <?php
                        $sqlCidades = "SELECT * FROM Cidade";
                        $resultCidades = mysqli_query($con, $sqlCidades);
                        while($rowCidade = mysqli_fetch_array($resultCidades)){
                            $selected = ($rowCidade['id_cidade'] == $row['id_cidade']) ? 'selected' : '';
                            echo "<option value='".$rowCidade['id_cidade']."' $selected>".$rowCidade['nome_cidade']."/".$rowCidade['estado']."</option>";
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