<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Paciente</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <h2 align="center">Deletar paciente</h2>
           
        <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1) {  ?>
            <h5 align="center">Paciente deletado com sucesso!</h5>
        <?php } ?>

        <div>     
            <form  method="post" action="paciente.controller.php?acao=deletar">
                <div>
                    <br>
                    <label>CPF:</label>
                    <input type="text" id="cpf" name="cpf" placeholder="CPF"/>
                </div>
                
                <br>
                <div align="center">
                    <button type="submit">Deletar</button>
                </div>
            </form>
        </div>
    </body>
</html>