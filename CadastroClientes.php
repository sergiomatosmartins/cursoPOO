<?php

/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 13/06/2016
 * Time: 16:12
 */
class CadastroClientes
{
    public $tabClientes;

    function __construct(){
        $this->tabClientes = array();
    }

    public function addTabCliente($objCliente){
        $this->tabClientes[] = $objCliente;

    }

    public function getTabClientes(){
        return $this->tabClientes;
    }

    function ordenaTabClientes($ordem)
    {

        //sort($tabClientes);
        if($ordem == "D") {
            rsort($this->tabClientes);
        }else {
            sort($this->tabClientes);
        }
    }

    function pesquisaCliente ( $codigo )
    {

        //print_r($this->getTabClientes());
        foreach ( $this->getTabClientes() as $key => $cliente )
        {
            if  ( $cliente->getCodigo() == $codigo ) {

                return $cliente;
                //echo "aaa" . $key;
                //echo($product->getNome());
            }
        }
    }
    
   

    function getCliente($linha)
    {
        return '{"id" : '.$linha.' ,
                "tipo" : "'.$this->tabClientes[$linha]->getTipo().'",
                "codigo" : "'.$this->tabClientes[$linha]->getCodigo().'",
                "nome" : "'.$this->tabClientes[$linha]->getNome().'"
                "cpdCnpj" : "'.$this->tabClientes[$linha]->getCpfCnpj().'"
                "grauImportancia" : "'.$this->tabClientes[$linha]->grauImportancia().'"
                },';
    }

    function getTipo($linha)

    {
        return $this->tabClientes[$linha]->getTipo();
      
    }

    function getCodigo($linha)

    {
        return $this->tabClientes[$linha]->getCodigo();
    }

    function getNome($linha)
    {
        return $this->tabClientes[$linha]->getNome();
    }
    function getCpfCnpj($linha)
    {
        return $this->tabClientes[$linha]->getCpfCnpj();
    }

    function getGrauImportancia($linha)
    {
        return $this->tabClientes[$linha]->getGrauImportancia();
    }


}