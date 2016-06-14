<?php

/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 13/06/2016
 * Time: 11:22
 */
interface ClienteInterface
{

    public function setGrauImportancia($importancia);
    public function setEnderecoCobranca($endereco, $bairro, $cidade, $uf, $cep);

}