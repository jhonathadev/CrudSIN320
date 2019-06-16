<?php
	require "paciente.model.php";
	require "conexao.php";
	require "tarefa_paciente.php";
	
	$acao = isset ($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir' ){
		$paciente = new Paciente();
		$paciente->__set('nome',$_POST['nome']);
		$paciente->__set('sobrenome',$_POST['sobrenome']);
		$paciente->__set('cpf',$_POST['cpf']);
		$paciente->__set('telefone',$_POST['telefone']);
		$paciente->__set('sexo',$_POST['sexo']);
		$paciente->__set('endereco',$_POST['endereco']);
		$conexao =  new Conexao();
		$cadastrar = new Tarefa_Paciente($conexao,$paciente);
		$cadastrar->inserir();
		header('location: formulario_paciente.php?inclusao=1');

	}else if($acao == 'listar'){

		$paciente = new Paciente();
		$conexao =  new Conexao();
		$gerarlista = new Tarefa_Paciente($conexao,$paciente);
		$retorno = $gerarlista->listar();

	}else if($acao == 'atualizar'){

		$paciente = new Paciente();
		$paciente->__set('nome',$_POST['nome']);
		$paciente->__set('cpf',$_POST['cpf']);
		$conexao = new Conexao();
		$atualizar =  new Tarefa_Paciente($conexao,$paciente);
		$atualizar->atualizar();
		header('location:formulario_atualizar.php?inclusao=1');

	}else if($acao == 'deletar'){

		$paciente = new Paciente();
		$paciente->__set('cpf',$_POST['cpf']);
		$conexao = new Conexao();
		$remover =  new Tarefa_Paciente($conexao,$paciente);
		$remover->remover();
		header('location:paciente_delete.php?inclusao=1');
	}
	
	
?>