<?php
include("../includes/variaveis.php");
include ("../ClassPDO/ClassCrud.php");
//require_once '../includes/variaveis.php';
//require_once '../ClassPDO/ClassCrud.php';

//echo "$id, $nome, $sexo, $cidade";

$crud = new ClassCrud();
$crud->insertDB(
        "cadastro",
        "?, ?, ?, ?",
        array(
            $id,
            $nome,
            $sexo,
            $cidade                  
        )
    );

echo "Cadastro realizado com sucesso";