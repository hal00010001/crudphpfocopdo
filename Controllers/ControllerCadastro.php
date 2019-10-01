<?php
include("../includes/variaveis.php");
include ("../ClassPDO/ClassCrud.php");

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
