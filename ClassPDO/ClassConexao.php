<?php

abstract class ClassConexao {
    
    //Realizara a conexao com o banco de dados
    protected function conectaDB(){
        try {
            $Con = new PDO("mysql:host=localhost;dbname=crud", "root", "");            
            return $Con;
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
}
