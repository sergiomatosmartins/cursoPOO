<?php

/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 10/06/2016
 * Time: 17:35
 */

class Cliente
{

    public $tipo;
    public $codigo;
    public $nome;
    public $cpfCnpj;
    public $email;
    public $endereco;
    public $bairro;
    public $cidade;
    public $uf;
    public $cep;
    public $importancia = 1;

    public $cobranca = false;
    public $enderecoCobranca;
    public $bairroCobranca;
    public $cidadeCobranca;
    public $ufCobranca;
    public $cepCobranca;

    function __construct($codigo, $nome, $cpfCnpj, $email, $endereco, $bairro, $cidade, $uf, $cep)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cpfCnpj = $cpfCnpj;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->cep = $cep;
 
    }
   

    public function setEnderecoCobranca($endereco, $bairro, $cidade, $uf, $cep){

        $this->enderecoCobranca = $endereco;
        $this->bairroCobranca = $bairro;
        $this->cidadeCobranca = $cidade;
        $this->ufCobranca = $uf;
        $this->cepCobranca = $cep;
    }


    public function addTabCliente($objCliente){
        $this->tabClientes[] = $objCliente;
    }

    public function getTabClientes(){
        return $this->tabClientes;
    }

    function pegaIndice($codigo)
    {

        if($codigo) {
            return $indice = array_search($codigo, array_column($this->tabClientes, 'codigo'));
        }
    }
 

    /**
     * @return mixed
     */


    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    
    public function getTipo()
    {
        return $this->tipo;
    }
    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->$cpfCnpj = $cpfCnpj;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return int
     */
    public function getImportancia()
    {
        return $this->importancia;
    }

    /**
     * @param int $importancia
     */
    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
    }

    /**
     * @return boolean
     */
    public function getCobranca()
    {
        return $this->cobranca;
    }

    /**
     * @return mixed
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }


    /**
     * @return mixed
     */
    public function getBairroCobranca()
    {
        return $this->bairroCobranca;
    }

    /**
     * @param mixed $bairroCobranca
     */
    public function setBairroCobranca($bairroCobranca)
    {
        $this->bairroCobranca = $bairroCobranca;
    }

    /**
     * @return mixed
     */
    public function getCidadeCobranca()
    {
        return $this->cidadeCobranca;
    }

    /**
     * @param mixed $cidadeCobranca
     */
    public function setCidadeCobranca($cidadeCobranca)
    {
        $this->cidadeCobranca = $cidadeCobranca;
    }

    /**
     * @return mixed
     */
    public function getUfCobranca()
    {
        return $this->ufCobranca;
    }

    /**
     * @param mixed $ufCobranca
     */
    public function setUfCobranca($ufCobranca)
    {
        $this->ufCobranca = $ufCobranca;
    }

    /**
     * @return mixed
     */
    public function getCepCobranca()
    {
        return $this->cepCobranca;
    }

    /**
     * @param mixed $cepCobranca
     */
    public function setCepCobranca($cepCobranca)
    {
        $this->cepCobranca = $cepCobranca;
    }

   
}



