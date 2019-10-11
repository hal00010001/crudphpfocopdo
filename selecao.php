<?php

include("includes/header.php");
include("./ClassPDO/ClassCrud.php");

?>
<div class="content">
    <table class="tabelaCrud">
        <tr>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Cidade</td>
            <td>Ações</td>
        </tr>
        
        <!-- Estrutura de loop -->
        <?php
        
            $crud = new ClassCrud();
            $bFetch = $crud->selectDB(            
                    "*",
                    "cadastro",
                    "",
                    array()
                );
        
            while($fetchs = $bFetch->fetch(PDO::FETCH_ASSOC)){
                
                ?>
        
                <tr>
                    <td><?php echo $fetchs['nome']; ?></td>
                    <td><?php echo $fetchs['sexo']; ?></td>
                    <td><?php echo $fetchs['cidade']; ?></td>
                    <td>
                        <a href="<?php echo "visualizar.php?id={$fetchs['id']}"; ?>">Visualizar</a>
                        <a href="<?php echo "cadastro.php?id={$fetchs['id']}"; ?>">Editar</a>
                        <a class="deletar" href="<?php echo "Controllers/ControllerDeletar.php?id={$fetchs['id']}"; ?>">Deletar</a>
                    </td>
                </tr>
        
        <?php 
                
                /*echo "<tr>";
                echo "<td>"+$fetchs['nome'];+"</td>";
                echo "<td>"+$fetchs['sexo'];+"</td>";
                echo "<td>"+$fetchs['cidade'];+"</td>";
                echo "<td>"
                        . "<a href='visualizar.php'>Visualizar</a>"
                        . "<a href='atualizar.php'>Editar</a>"
                        . "<a href='deletar.php'>Deletar</a></td></tr>";*/
            }
                            
        ?>
        
        
    </table>
</div>
<?php include("includes/footer.php"); ?>