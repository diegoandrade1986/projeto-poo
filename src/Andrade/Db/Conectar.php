<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 18/03/16
 * Time: 12:46
 */

namespace Andrade\Db;


abstract class Conectar
{

    private static function conexao (){
        try {
            $file_db = new \PDO('sqlite:' . __DIR__ . '/../../../sqlite/cliente.db');
            //echo __DIR__ . '/../../../sqlite/cliente.sqlite';
            $file_db->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            return $file_db;
        }catch(\PDOException $e){
            echo "Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}";
        }
    }
    public static function  getConexao(){
        return self::conexao();
    }
}
/*$var = Conectar::getConexao();
var_dump($var);*/
/*
CREATE TABLE cliente (id INTEGER PRIMARY KEY, nome VARCHAR(100), idade INTERGER, cpf VARCHAR(14),endereco VARCHAR(100),endereco_entrega VARCHAR(100),importancia interger, tipocliente CHAR(2));

INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("Diego Andrade",29, "123.456.789-88", "Rua 1, nº 123 - SP","RUA ALGO",1,"PF");
INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("Vanita",25, "789.541.369-01", "Rua 2, nº 222 - SP","RUA ALGO 2",2,"PJ");
INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("Maria",23, "987.741.364-05", "Rua 3, nº 333 - SP","RUA ALGO 3",3,"PF");
INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("João", 32,"854.001.140-01", "Rua 4, nº 444 - SP","RUA ALGO 4",4,"PJ");
INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("Jose", 33,"059.905.154-01", "Rua 5, nº 555 - SP","RUA ALGO 5",5,"PF");
INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("Ana", 21,"212.413.001-01", "Rua 6, nº 666 - SP","",5,"PJ");
INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("Joaquim",45, "301.102.301-01", "Rua 7, nº 777 - SP","",5,"PF");
INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("Carlos",47, "103.054.193-01", "Rod. 8, nº 888 - SP","",4,"PJ");
INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("Carla",55,"123.789.257-79", "Rua 9, nº 999 - SP","",3,"PF");
INSERT INTO cliente (nome,idade,cpf,endereco,endereco_entrega,importancia,tipocliente) VALUES ("Debora",60, "231.321.412-01", "Rua 10, nº 1010 - SP","",2,"PJ");

*/
