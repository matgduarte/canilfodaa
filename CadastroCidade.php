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
                <fieldset>
                    <form action="CadastroCidadeExe.php" method="post">
                        <h2>Cadastro de Cidade</h2>
                        <div class="form-group">
                            <label for="nome">Nome da Cidade</label>
                            <input type="text" name="nome_cidade" id="nome_cidade" required>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" required>
                                <option value="SP">SP</option>
                                <option value="RJ">RJ</option>
                                <option value="MG">MG</option>
                                <option value="ES">ES</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn">Cadastrar</button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>

</body>

</html>