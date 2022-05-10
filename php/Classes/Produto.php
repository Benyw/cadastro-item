<?php

    require_once(__DIR__."/Config.php");

	class Produto extends Config {

        function criarNovoProduto() {
            echo 'Criou o produto!';
        }

        function listarProdutos() {
            $query = "SELECT * FROM estoque_produtos";
            return $this->listar($query);
        }

	}
?>