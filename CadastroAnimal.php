<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidade</title>
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
        <fieldset>
            <legend>Cadastro do Animal</legend>
            <form action="CadastroAnimalExe.php" method="post">
                <div class="form-group">
                    <label for="nomec">Nome do Animal</label>
                    <input type="text" name="nome_animal" id="nome_animal" required>
                </div>
                <div class="form-group">
                    <label for="text">Especie</label>
                    <input type="text" name="especie" id="especie" required>
                </div>
                <div class="form-group">
                    <label for="text">Raça</label>
                    <input type="text" name="raça" id="raça" required>
                </div>
                <div class="form-group">
                    <label for="text">Data de Nascimento</label>
                    <input type="text" name="data_nascimento" id="data_nascimento" required>
                </div>
                <div class="form-group">
                    <label for="text">Idade</label>
                    <input type="text" name="data_nascimento" id="data_nascimento" required>
                </div>
                <div class="form-group">
                    <div class="radio-group">
                        <input type="radio" id="castrado" name="castrado" value="1">
                        <label for="sim">Castrado</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" id="castrado" name="castrado" value="0">
                        <label for="sim">Não Castrado</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn">Cadastrar</button>
                </div>
            </form>
        </fieldset>
        <button class="btn"><a href="./index.html">Voltar</a></button>
    </div>

</body>

</html>