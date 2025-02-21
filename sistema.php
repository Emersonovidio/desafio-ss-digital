<?php
session_start();
//print_r($_SESSION['email']);

$logado = $_SESSION['email'];

if (!isset($_SESSION['last_activity'])) {
    $_SESSION['last_activity'] = time();
}
$logadomessage = "Você está conectado desde: " . date('d/m/Y H:i:s', $_SESSION['last_activity']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Area Logada</title>
</head>

<body>
    <h4>
        <?php
        echo "Bem-vindo, <u>$logado</u>"; ?>
        <br><br>
        <u><?php echo $logadomessage; ?></u>
    </h4>
</body>

<br><br>
<div>
    <form method="post" action="logout.php">
        <button type="submit" name="logout" class="btn btn-danger">Sair</button>
</div>

</html>