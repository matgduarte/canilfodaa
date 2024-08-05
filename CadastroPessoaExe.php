<?php
include('includes/conexao.php');
        $nome_pessoa = $_POST['nome_pessoa'];
        $email = $_POST['email'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
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
    <?php
        include('includes/conexao.php');
        $nome_pessoa = $_POST['nome_pessoa'];
        $email = $_POST['email'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        echo "<h1>Dados da Pessoa</h1>";
        echo "Nome da Pessoa: $nome_pessoa<br>";
        echo "Email: $email<br>";
        echo "Bairro: $bairro<br>";
        echo "Cep: $cep<br>";
        
        $sql =  "INSERT INTO Pessoa (nome_pessoa,email,bairro,cep)";
        $sql .= " VALUES ('".$nome_pessoa."','".$email."','".$bairro."','".$cep."')";
        echo "<p>" . $sql . "</p>";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados Cadastrados com sucesso</h2>";
        } else {
            echo "<h2>Erro ao cadastrar</h2>";
            echo "<p>" . mysqli_error($con) . "</p>";
        }
    ?>
    <button class="btn"><a href="./index.html">Voltar</a></button>
  </div>
</body>
</html>
