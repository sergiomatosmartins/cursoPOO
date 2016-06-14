<?php

/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 10/06/2016
 * Time: 17:50
 */

class ClientePJ extends Cliente implements ClienteInterface
{

    public function setGrauImportancia($grauImportancia){
        $this->grauImportancia = $grauImportancia;
    }
    public function getGrauImportancia(){
        return $this->grauImportancia;
    }

}
