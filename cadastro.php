<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confsenha = $_POST['confsenha'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <style>
        .fonte{
            font-family: 'Noto Sans JP', sans-serif;
        }
    </style>
</head>
<body>
    <div style="width: 50%; margin: 0 auto; padding: 10%;">
        <h3 style="font-family: 'Noto Sans JP', sans-serif;">Dados de cadastro</h3>
        <p class="fonte"><b>Nome: </b><?php echo $nome; ?></p>
        <p class="fonte"><b>E-mail: </b><?php echo $email; ?></p>
        <p class="fonte"><b>Senha: </b><?php echo $senha; ?></p>
        <p class="fonte"><b>Confirmação de senha: </b><?php echo $confsenha ;?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>