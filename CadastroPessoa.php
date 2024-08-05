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
        <fieldset>
            <legend>Cadastro da Pessoa</legend>
            <form action="CadastroPessoaExe.php" method="post">
                <div class="form-group">
                    <label for="nome_pessoa">Nome do Cliente</label>
                    <input type="text" name="nome_pessoa" id="nome_pessoa" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="endereço">Endereço</label>
                    <input type="text" name="endereço" id="endereço" required>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" required>
                </div>
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" required>
                </div>
                

                <div class="form-group">
                    <button type="submit" class="btn">Cadastrar</button>
                </div>
            </form>
        </fieldset>
        </div>
    </div>

</body>

</html>