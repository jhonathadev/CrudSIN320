<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Paciente</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <h2 align="center">Atualizar nome paciente</h2>
           
        <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
            <h5 align="center">Paciente atualizado com sucesso!</h5>
        <?php } ?>

        <div>     
            <form  method="post" action="paciente.controller.php?acao=atualizar">
                <div>
                    <label>Novo nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Nome"/>
                    <br>
                    <br>
                    <label>CPF:</label>
                    <input type="text" id="cpf" name="cpf" placeholder="CPF"/>
                </div>
                
                <br>
                <div align="center">
                    <button type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </body>
</html>