<?php

require_once "../../config/config.php";

class Conexao{

    public function getConexao(){

            try {
                $conexao = new PDO("mysql:host=" . HOST . ";dbname=" . BANCO, USARIO, SENHA);
            }catch (Exception $e){
                echo "Ocorreu um erro: {$e->getMessage()} na linha {$e->getLine()}";
        }
    }

}

$conexao = new Conexao();
$conexao->getConexao();