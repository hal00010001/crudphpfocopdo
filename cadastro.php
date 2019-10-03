<?php include("includes/header.php"); ?>
<div class="content">
    <?php
        include("./ClassPDO/ClassConexao.php");
        include("./ClassPDO/ClassCrud.php");
        //$crud = new ClassCrud();
        //$crud->preparedStatements('dfila', array(1, 2, 3, 4));
        //echo "<h1>Cadastro</h1>";
    ?>
    <div class="resultado"></div>
    <div class="formulario">
        <h1 class="center">Cadastro</h1>
        <form name="formCadastro" id="formCadastro" action="">
            <div class="formularioInput">
                Nome: <br/>
                <input type="text" id="nome" name="nome" />
            </div>
            <div class="formularioInput">
                Sexo: <br/>
                <input type="text" id="sexo" name="sexo" />
            </div>
            <div class="formularioInput">
                Cidade: <br/>
                <input type="text" id="cidade" name="cidade" />
            </div>
            <div class="formularioInput formularioInput100 center">
                <input type="submit" value="Cadastrar" />
            </div>
        </form>        
    </div>
</div>
<?php include("includes/footer.php"); ?>
