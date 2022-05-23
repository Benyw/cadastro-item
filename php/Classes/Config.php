<?php

	#Criando a classe Config, responsável pela conexão com o banco de dados e execução das query SQL
	class Config {
		
		#Função conectar() - Retorna um objeto da classe PDO (Conexão com o banco de dados)
		function conectar(){
            return $conn = new PDO("mysql:dbname=itens;host=localhost;charset=utf8", "benyw", "1521");
		}

		#Função executar() - Executa uma query SQL (Inserção, Atualização ou Remoção). Caso a execução ocorra bem, retorna o valor 1
		function executar($query, $array){
			$stmt = $this->conectar()->prepare($query);
			try {
				return $stmt->execute($array);
			}
			catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		#Função listar() - Executa uma consulta no banco de dados e retorna os valores da tabela sem nenhum tipo de filtro
		function listar($query){
			$stmt = $this->conectar()->prepare($query);
			try {
				$stmt->execute();
				return $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		#Função consultar() - Executa uma consulta no banco de dados e retorna os valores da tabela, sendo possível utilizar filtros na consulta
		function consultar($query, $array){
			$stmt = $this->conectar()->prepare($query);
			try {
				$stmt->execute($array);
				return $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				return $e->getMessage();
			}
		}

	}
?>