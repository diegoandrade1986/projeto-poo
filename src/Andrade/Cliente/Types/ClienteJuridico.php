<?php

/**
 * Created by PhpStorm.
 * User: diego
 * Date: 07/03/16
 * Time: 16:34
 */
class ClienteJuridico extends Cliente implements InterfaceCliente
{

    protected $endCobranca;
    protected $importancia;
    protected $tipo = "PJ";

    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $endCobranca
     */
    public function setEndCobranca($endCobranca)
    {
        $this->endCobranca = $endCobranca;
    }

    /**
     * @param mixed $importancia
     */
    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
    }


    public function __construct($nome, $idade, $cpf, $endereco, $endCobranca, $importancia)
    {
        parent::__construct($nome, $idade, $cpf, $endereco);
        $this->setEndCobranca($endCobranca);
        $this->setImportancia($importancia);
    }

    public function endCobranca()
    {
        if ($this->endCobranca != ""){
            return $this->endCobranca;
        }else{
            return self::getEndereco();
        }
    }
    public function importancia()
    {
        return $this->importancia;
    }
}