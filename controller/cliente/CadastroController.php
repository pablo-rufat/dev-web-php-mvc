<?php
require_once(__DIR__."/../../model/cliente/clienteDAO.php");
class CadastroController{

    private $cliente;

    public function __construct(){
        $this->cliente = new Cliente();
        $this->cadastro();
    }

    private function cadastro(){
        $this->cliente->setNome($_POST['nome']);
        $this->cliente->setDataNascimento(date('Y-m-d',strtotime($_POST['dataNascimento'])));
        $this->cliente->setEndereco($_POST['endereco']);
        $this->cliente->setSenha($_POST['senha']);
        $this->cliente->setEmail($_POST['email']);
        $result = $this->cliente->incluir();

        if($result >= 1){
            echo "<script>alert('Cadastro incluído com sucesso!');document.location='../../view/clientes.php'</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar o usuario!');history.back()</script>";
        }
    }
}
// new CadastroController($_GET['campo']);      // se for um controller que precisa de parametros
new CadastroController();

?>
