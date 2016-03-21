<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 21/03/16
 * Time: 10:01
 */

namespace Andrade\Cliente4;


class CrudClient
{
    private $connect;

    public function __construct(\PDO $connect) {
        $connect instanceof \PDO;
        $this->connect = $connect;
    }

    public function listaCliente()
    {
        try{
            $listar = $this->connect->prepare("SELECT * FROM cliente;");
            $listar->execute();
            $dados = $listar->fetchAll(\PDO::FETCH_OBJ);
            if (count($dados) > 0) {
                return $dados;
            }else{
                return false;
            }

        }catch(\PDOException $e){
            echo "Erro ao listar Clientes" . $e->getMessage();
        }

    }

}