<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <title>Cadastro de clientes</title>
</head>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="container">
        <div class="row">
            <form method="post" action="../controller/cliente/CadastroController.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
                <div class="form-group">
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite seu nome" required autofocus>
                    <br>
                    <input class="form-control" type="date" id="dataNascimento" name="dataNascimento" placeholder="Digite sua data de nascimento" required>
                    <br>
                    <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
                    <br>
                    <input class="form-control" type="password" id="senha" name="senha" placeholder="Digite sua nova senha" required>
                    <br>
                    <input class="form-control" type="text" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    <script language="javascript" type="text/javascript">

        function validar(formulario) {
            formulario.forEach(campo => {
                if (campo.value == "") {
                    alert("Preencha o campo " + campo.name);
                    campo.focus();
                    return false;
                }
            });
            formulario.submit();
        }

    </script>
</body>

</html>
