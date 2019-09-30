<?php include("includes/header.php"); ?>
<div class="content">
    <?php
        include("./ClassPDO/ClassConexao.php");
        include("./ClassPDO/ClassCrud.php");
        $crud = new ClassCrud();
        //$crud->preparedStatements('dfila', array(1, 2, 3, 4));
    ?>
</div>
<?php include("includes/footer.php"); ?>

