<?php

//include("{$_SERVER['DOCUMENT_ROOT']}/crudphpfocopdo/ClassPDO/ClassConexao.php");
include("ClassConexao.php");

class ClassCrud extends ClassConexao {
           
    //Atributos
    private $crud;
    private $contador;
    
    //Preparação das declarações
    private function preparedStatements($query, $parametros){
        $this->countParametros($parametros);
        $this->crud = $this->conectaDB()->prepare($query);
        if($this->contador > 0){
            for($i=1; $i<=$this->contador; $i++){
                $this->crud->bindValue($i, $parametros[$i - 1]);
            }
        }
        $this->crud->execute();
        //echo $this->contador;
    }
    
    //Contador de parâmetros
    private function countParametros($parametros){
        $this->contador = count($parametros);
    }
    
    //Insercao no DB
    public function insertDB($tabela, $condicao, $parametros){        
        $this->preparedStatements("insert into {$tabela} values ({$condicao})", $parametros);
        return $this->crud;
    }
    
    //Insercao no DB
    public function selectDB($campos, $tabela, $condicao, $parametros){        
        $this->preparedStatements("select {$campos} from {$tabela} {$condicao}", $parametros);
        return $this->crud;
    }
    
    //Deletar dados no DB
    public function deleteDB($tabela, $condicao, $parametros){
        $this->preparedStatements("delete from {$tabela} where {$condicao}", $parametros);
        return $this->crud;
    }
    
    //Editar dados no DB
    public function updateDB($tabela, $set, $condicao, $parametros){
        $this->preparedStatements("update {$tabela} set {$set} where {$condicao}", $parametros);
        return $this->crud;
    }
    
}
