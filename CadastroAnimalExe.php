<?php
include('includes/conexao.php');
        $nome = $_POST['nome_animal'];
        $especie = $_POST['especie'];
        $raça = $_POST['raça'];
        $data_nascimento = $_POST['data_nascimento'];
        $idade = $_POST['idade'];
        $castrado = $_POST['castrado'];
        $cadastro = $_POST['cadastro'];
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
        $nome = $_POST['nome_animal'];
        $especie = $_POST['especie'];
        $raça = $_POST['raça'];
        $data_nascimento = $_POST['data_nascimento'];
        $castrado = $_POST['castrado'];
        echo "<h1>Dados do Animal</h1>";
        echo "Nome do Animal: $nome_animal<br>";
        echo "Especie: $especie<br>";
        echo "Raça: $raça<br>";
        echo "Data de Nascimento: $data_nascimento<br>";
        echo "Idade: $idade<br>";
        echo "Castrado: $castrado<br>";
        echo "Estado: $estado<br>";
        
        $sql =  "INSERT INTO Animal (nome_animal,especie,raça,data_nascimento,idade,castrado)";
        $sql .= " VALUES ('".$nome_animal."','".$especie."','".$raça."','".$data_nascimento."','".$castrado."')";
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
