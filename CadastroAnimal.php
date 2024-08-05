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
                        <input type="text" name="nome_animal" id="nome_animal" required>
                            <label for="nome_animal">Nome do Animal</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="especie" id="especie" required>
                            <label for="especie">Especie</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="raça" id="raça" required>
                            <label for="raça">Raça</label>
                        </div>
                        <div class="form-group form-group2">
                            <input type="date" name="data_nascimento" id="data_nascimento" required>
                            <label for="data_nascimento">Data de Nascimento</label>
                        </div>
                        <div class="form-group form-group2">
                            <div class="radio-group">
                                <label for="sim">Castrado</label>
                                <input type="radio" id="castrado" name="castrado" value="1">
                            </div>
                            <div class="radio-group">
                            <label for="não">Não Castrado</label>
                                <input type="radio" id="castrado" name="castrado" value="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn">Cadastrar</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

</body>

</html>