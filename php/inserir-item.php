<?php
    require_once(__DIR__."/Classes/Item.php");

    $obj = new Item();

    $codigo = $_POST["txtCodigoItem"];
    $nome = $_POST["txtNomeItem"];
    $descricao = $_POST["txtDescricaoItem"];
    $familia = $_POST["slFamilia"];
    $unidadeMedida = $_POST["slUnidadeMedida"];
    $estabelecimento = $_POST["txtEstabelecimento"];
    $descricaoEstabelecimento = $_POST["txtDescricaoEstabelecimento"];
    $informacoesComplementares = $_POST["txtInformacoesComplementares"];
    $dataImplementacao = $_POST["dtImplantacao"];
    $dataLiberacao = $_POST["dtLiberacao"];
    $situacao = (int)$_POST["slSituacao"];

    $arrayData = [
        $codigo,
        $nome,
        $descricao,
        $familia,
        $unidadeMedida,
        $estabelecimento,
        $descricaoEstabelecimento,
        $informacoesComplementares,
        $dataImplementacao,
        $dataLiberacao,
        $situacao
    ];

    $criacao = $obj->criarNovoItem($arrayData);

    if ($criacao == true) {
        http_response_code(201);
        echo json_encode(["mensagem" => "Item criado com sucesso!"]);
        exit();
    } else {
        http_response_code(500);
        echo json_encode(["erro" => "Erro ao criar item!"]);
        exit();
    }

?>