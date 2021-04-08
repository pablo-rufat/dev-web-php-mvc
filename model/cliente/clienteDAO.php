<?php
require_once("clienteModel.php");

class Cliente extends ClienteModel {

    private $id;
    private $dataNascimento;
    private $nome;
    private $endereco;
    private $senha;
    private $email;
    private $createdAt;

    // Setters
    public function setId($string){
        $this->id = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setDataNascimento($string){
        $this->dataNascimento = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setSenha($string){
        $this->senha = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setCreatedAt($string){
        $this->createdAt = $string;
    }

    //Getters
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCreatedAt(){
        return $this->createdAt;
    }


    public function incluir(){
        return $this->setCliente($this->getNome(),$this->getDataNascimento(),$this->getEndereco(),$this->getSenha(),$this->getEmail());
    }
}
?>
