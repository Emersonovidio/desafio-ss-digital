<?php
session_start();

if (isset($_POST['logout'])) {
    //limpa variaves de sessão

    $_SESSION = array();

    //se existir cookie, limpa todos

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    //destroi sessão
    session_destroy();

    //vai para login
    header('Location: login.php');
}
//https://www.php.net/manual/en/function.session-destroy.php
