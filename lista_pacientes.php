<html>
	<head>
	    <meta charset="UTF-8"/>
	    <title>Pacientes</title>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	    <div align="center">
	    	<h1 align="center">Pacientes cadastrados</h1>
			<?php 
				$acao = 'listar';
				require "paciente.controller.php";
				foreach ($retorno as $indice => $value) {
					echo "Nome: ";
					print $value->nome;
					echo " ";
					print $value->sobrenome;
					echo " | ";
					echo "CPF: ";
					print $value->cpf_paciente;
					echo " | ";
					echo "Sexo: ";
					print $value->sexo;
					echo " | ";
					echo "Endereço: ";
					print $value->endereco;
					echo " | ";
					echo "Telefone: ";
					print $value->telefone;
					echo "<hr>";
				} 
			?>
		</div>
	</body>
</html>