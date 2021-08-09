<?php

    include_once ("../../sistema/includes/connection.inc");
    $con->executeQuer($sql);

    $con = new Connection;
    $con->open();

    $count = $_GET['c'];

    $sql = "SELECT estado.IdEstado, estado.UF, estado.Estado FROM estado WHERE estado.IdEstado = '".$_GET['id']."'";
    $rs = $con->executeQuery($sql);
    if($rs->next()){

        $array = Array(
            'name' => $rs->get('Estado'),
            'uf' => $rs->get('UF'),
            'ibge' => $rs->get('IdEstado')
        );

        print_r($array);

    }

    $sql = "SELECT cidade.Cidade, cidade.IdEstado, cidade.IdCidade FROM cidade, estado WHERE cidade.IdEstado = estado.IdEstado AND estado.IdEstado = '".$_GET['id']."'";
    $rs = $con->executeQuery($sql);
    while($rs->next()){

        $array = Array(
            'name' => $rs->get('Cidade'),
            'estado_id' => $count,
            'ibge' => $rs->get('IdCidade'),
        );

        print_r($array);

    }

    $con->close();
?>