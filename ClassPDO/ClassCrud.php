<?php

class ClassCrud extends ClassConexao {
    
    //Atributos
    private $crud;
    private $contador;
    
    //Preparação das declarações
    private function preparedStatements($query, $parametros){
        $this->countParametros($parametros);
        $this->crud = $this->conectaDB()->prepare($query);
        if($this->contador > 0){
            for($i=0; $i<=$this->contador; $i++){
                $this->crud->bindValue($i, $parametros[$i]);
            }
        }
        $this->crud->execute();
        //echo $this->contador;
    }
    
    //Contador de parâmetros
    private function countParametros($parametros){
        $this->contador = count($parametros);
    }
    
    //Insercao no banco de dados
    public function insertDB($tabela, $condicao, $parametros){
        $this->preparedStatements("insert into {$tabela} values ({$condicao})", $parametros);
        return $this->crud;
    }
    
}
