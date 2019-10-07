<?php

include("includes/header.php");
include("./ClassPDO/ClassCrud.php");

?>
<div class="content">
    
    <?php
        
        $crud = new ClassCrud();
        $idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $bFetch = $crud->selectDB("*", "cadastro", "where id = ?", array($idUser));
        echo "ID User: " . $idUser;
        $fetchs = $bFetch->fetch(PDO::FETCH_ASSOC);
            
    ?>
    <h4>Dados do Usuário</h4>
    <hr>
    <strong>Nome:</strong> <?php echo $fetchs['nome']; ?><br/>
    <strong>Sexo:</strong> <?php echo $fetchs['sexo']; ?><br/>
    <strong>Cidade:</strong> <?php echo $fetchs['cidade']; ?><br/>
</div>
<?php include("includes/footer.php"); ?>
