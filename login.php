<?php
session_start();
//print_r($_SESSION);

//se existir variavel submit e email e senha não estiverem vazios
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // print_r($_POST['email']);
    // echo '<pre>';
    // print_r($_POST['senha']);
    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //busca usuario no banco
    $sql = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
    $stmt = $conexao->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //print_r($result);

    if ($result) {
        //cria sessão com usuario logado
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        //vai para area logada
        header('Location: sistema.php');
    } else {
        echo "Usuário ou senha inválidos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="width: 22rem;">
            <h2 class="text-center mb-4">Login</h2>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lembrar usuário</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Enviar</button>
                <a href="register.php" class="btn btn-link w-100">Criar conta</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

</body>

</html>