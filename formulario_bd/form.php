<?php

if (isset($_post["submit"])) {
    include_once('config.php');

    $email = $_post['email'];
    $senha = $_post['senha'];
    $confirmarsenha = $_post['confirmarsenha'];
    $CPF = $_post['CPF'];
    $nome = $_post['nome'];

    $dados = mysqli_query($conexao, "INSERT INTO cliente(Email,Senha,Confirmarsenha,Nome) VALUES ('$email','$senha','$confirmarsenha','$CPF','$nome')");

}

?>






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>

</head>


<body>

    <div class="caixa-formulario">

        <form action="form.php" method="post">

            <h1 class="h1_criar_conta">Criar Conta</h1>

            <h4 class="dados_cadastrais">Dados Cadastrais:</h4>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Digite seu email:">
            </div>

            <div class="mb-3">
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1"
                    placeholder="Crie uma senha:">
            </div>

            <div class="mb-3">
                <input type="password" name="confirmarsenha" class="form-control" id="exampleInputConfirmPassword1"
                    placeholder="Confirme sua senha:">
            </div>

            <h4 class="h4_informacoes_pessoais">Informações Pessoais:</h4>

            <div class="form_endereco">
                <input type="text" name="CPF" class="form-control" id="inputCPF" placeholder="CPF:">
                <br>
                <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Nome:">
            </div>

            <div class="cep">

            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="lembrar-senha" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembrar meus dados.</label>
            </div>


            <button type="submit" name="submit" class="btn-enviar">Enviar</button>

        </form>
        <div>

</body>

</html>