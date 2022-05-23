<?php

    require_once(__DIR__."/Config.php");

	class Item extends Config {

        function criarNovoItem($array) {
            $query = "INSERT INTO 
                itens (codigo, nome, descricao, familia, unidade_medida, estabelecimento, descricao_estabelecimento, informacoes_complementares, data_implementacao, data_liberacao, situacao) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            return $this->executar($query, $array);                
        }

        function listarItens() {
            $query = "SELECT * FROM itens";
            return $this->listar($query);
        }

	}
?>