<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>receberdados</title>
</head>
<body>
    <?php
    $conexao = mysqli_connect("localhost","root","","teste");
    if(!$conexao){
        echo"NÃO CONECTADO";
    }
    echo"CONECTADO AO BANCO>>>>>>>>>>";
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conexao, $email);

    $sql = "SELECT email FROM teste.dados WHERE email='cpf'";
    $retorno = mysqli_query($conexao,$sql);


    if(mysqli_num_rows($retorno)>0){
        echo"EMAIL JÁ CADASTRADO!<br>";
    }else{
        $email = $_POST['email'];
    $sql = "INSERT INTO teste.dados(email) values('$email')";
    $resultado = mysqli_query($conexao, $sql);
    echo">>EMAIL CADASTRADO COM SUCESSO !!!<br>"; 
    }
     ?>
</body>
</html>