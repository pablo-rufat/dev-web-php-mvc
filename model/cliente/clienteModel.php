<?php

require_once(__DIR__."/../../init.php");
class ClienteModel{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setCliente($nome, $dataNascimento, $endereco, $senha, $email){

        $id = $this->guidv4();
        $encSenha = password_hash($senha, PASSWORD_BCRYPT);

        $stmt = $this->mysqli->prepare("INSERT INTO clientes (`id`, `data_nascimento`, `nome`, `endereco`, `senha`, `email`, `created_at`) VALUES (?,?,?,?,?,?, now())");
        $stmt->bind_param("ssssss",$id, $dataNascimento, $nome, $endereco, $encSenha, $email);

         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getClientes(){
        $result = $this->mysqli->query("SELECT * FROM clientes");
        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    // public function getClienteById(){
    //     $result = $this->mysqli->query("SELECT * FROM livros");
    //     $array = [];
    //     while($row = $result->fetch_array(MYSQLI_ASSOC)){
    //         $array[] = $row;
    //     }
    //     return $array;

    // }

    // public function getClienteByNome(){
    //     $result = $this->mysqli->query("SELECT * FROM livros");
    //     $array = [];
    //     while($row = $result->fetch_array(MYSQLI_ASSOC)){
    //         $array[] = $row;
    //     }
    //     return $array;

    // }

    private function guidv4($data = null) {

        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);


        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);

        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    // function login
}
?>
