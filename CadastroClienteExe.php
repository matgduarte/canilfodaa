<?php
include('includes/conexao.php');
        $nomec = $_POST['nome_cliente'];
        $email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
    <link rel="stylesheet" href="cadastrocidade.css">
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
        $nomec = $_POST['nome_cliente'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $ativo = $_POST['ativo'];
        echo "<h1>Dados do Cliente</h1>";
        echo "Nome do Cliente: $nome_cliente<br>";
        echo "Senha: $senha<br>";
        echo "Email: $email<br>";
        echo "Ativo: $ativo<br>";
        
        $sql =  "INSERT INTO Cliente (nome_cliente,senha, email,ativo)";
        $sql .= " VALUES ('".$nome_cliente."','".$senha."','".$email."','".$ativo."')";
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