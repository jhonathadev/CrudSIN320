<?php
	
	class Tarefa_Paciente{
	 	
		private $conexao;
		private $paciente;
		public function __construct(Conexao $conexao, Paciente $paciente){
			$this->conexao = $conexao->conectar();
			$this->paciente = $paciente;
		}	
	
		public function inserir(){
			$query = 'insert into paciente (cpf_paciente,nome,sobrenome,sexo,telefone,endereco)
			values 
			(:cpf,:nome,:sobrenome,:sexo,:telefone,:endereco)';
			$stmt = $this->conexao->prepare($query);

			$stmt->bindValue(':cpf', $this->paciente->__get('cpf'));
			$stmt->bindValue(':nome', $this->paciente->__get('nome'));
			$stmt->bindValue(':sobrenome', $this->paciente->__get('sobrenome'));
			$stmt->bindValue(':sexo', $this->paciente->__get('sexo'));
			$stmt->bindValue(':telefone', $this->paciente->__get('telefone'));
			$stmt->bindValue(':endereco',$this->paciente->__get('endereco'));
			if($stmt->execute()){
				echo "Sucesso ao inserir";
			}else{
				echo "Erro ao inserir";
			}
		}
		
		public function atualizar(){

			$query = 'update paciente set nome = :nome where cpf_paciente = :cpf';
			$stmt = $this->conexao->prepare($query);

			$stmt->bindValue(':cpf', $this->paciente->__get('cpf'));
			$stmt->bindValue(':nome', $this->paciente->__get('nome'));
	
			if($stmt->execute()){
				echo "Sucesso ao atualizar ";
			}else{
				echo "Erro ao atualizar";
			}
		}

		public function listar(){
			$query = 'select * from paciente';
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function remover(){
			$query = 'delete from paciente where cpf_paciente = :cpf';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':cpf', $this->paciente->__get('cpf'));
			if($stmt->execute()){
				echo "Sucesso ao deletar";
			}else{
				echo "Erro ao deletar";
			}
		}
		
	}
?>
	