<html>
<head>
    <meta charset="UTF-8"/>
    <title>Paciente</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <h2 align="center">Inserir paciente</h2>
       
    <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
        <h5 align="center">Paciente inserido com sucesso!</h5>
    <?php } ?>
    <div>     
        <form  method="post" action="paciente.controller.php?acao=inserir">
            <div>
                <label>Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Nome"/>
            </div>
            <br>
            <div>
                <label>Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome"/>
            </div>
            <br>
            <div>
                <label>Cpf:</label>
                <input type="text" id="cpf" name="cpf" placeholder="Cpf" />
            </div>
            <br>
            <div>
                <label>Telefone:</label>
                <input type="text" id="telefone" name="telefone" placeholder="Telefone" />
            </div>
            <br>
            <div>
                <label>Endereco:</label>
                <input type="text" id="endereco" name="endereco" placeholder="Endereço" />
            </div>
            <br>
            <div>
                <label>Sexo:</label>
                <select name="sexo">
                    <option value="feminino">Feminino</option> 
                    <option value="masculino" selected>Masculino</option>
                    <option value="nao_declarado">Não declarado</option>
                </select>
            </div>
            <br>
            <div align="center">
                <button type="submit">Cadastrar Paciente</button>
            </div>
        </form>
    </div>
</body>
</html>