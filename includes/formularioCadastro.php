<?php
        
        //require_once './ClassPDO/ClassConexao.php';
        require_once './ClassPDO/ClassCrud.php';
        //include("./ClassPDO/ClassConexao.php");
        //include("./ClassPDO/ClassCrud.php");
        //$crud = new ClassCrud();
        //$crud->preparedStatements('dfila', array(1, 2, 3, 4));
        //echo "<h1>Cadastro</h1>";
        if(isset($_GET['id'])){
            $acao = "editar";
            $crud = new ClassCrud();
            $bFetch = $crud->selectDB("*", "cadastro", "where id = ?", array($_GET['id']));
            $fetchs = $bFetch->fetch(PDO::FETCH_ASSOC);
            $id = $fetchs['id'];
            $nome = $fetchs['nome'];
            $sexo = $fetchs['sexo'];
            $cidade = $fetchs['cidade'];
        }
        else {
            $acao = "cadastrar";
            $id = 0;
            $nome = "";
            $sexo = "";
            $cidade = "";
        }
    ?>
    <div class="resultado"></div>
    <div class="formulario">
        <h1 class="center">Cadastro</h1>
        <form name="formCadastro" id="formCadastro" method="post" action="Controllers/ControllerCadastro.php">
            <input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>" />
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
            <div class="formularioInput">
                Nome: <br/>
                <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" />
            </div>
            <div class="formularioInput">
                Sexo: <br/>
                <select name="sexo" id="sexo">
                    <option value="<?php echo $sexo; ?>"><?php echo $sexo ?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </div>
            <div class="formularioInput">
                Cidade: <br/>
                <input type="text" id="cidade" name="cidade" value="<?php echo $cidade ?>" />
            </div>
            <div class="formularioInput formularioInput100 center">
                <input type="submit" value="Cadastrar" />
            </div>
        </form>        
    </div>