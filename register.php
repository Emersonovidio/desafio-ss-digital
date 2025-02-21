<?php
//print_r($_REQUEST);

if (isset($_POST['submit'])) {

    //DB
    include_once('config.php');

    //lista os campos
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


    //prepara a query
    $sql = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    //salva no DB
    $stmt->execute();

    //redireciona para login
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-start vh-100 mt-5">
        <div class="card p-4 shadow-lg" style="width: 22rem;">
            <h2 class="text-center mb-4">Cadastro</h2>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nome</label>
                    <input type="nome" name="nome" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail">
                </div>
                <div class="mb">
                    <label class="exampleInputPassword" for="exampleInputPassword">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword">
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
        </div>
    </div>

</body>

</html>