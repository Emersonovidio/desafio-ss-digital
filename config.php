<?php

$DB_HOST = "172.27.0.2";
$DB_PORT = "5432";
$DB_DATABASE = "emerson_db";
$DB_USERNAME = "postgres";
$DB_PASSWORD = "postgres";


$conexao = new PDO("pgsql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_DATABASE", $DB_USERNAME, $DB_PASSWORD);


$query = "SELECT COUNT(*) as total FROM users";
$stmt = $conexao->query($query);
$result = $stmt->fetch(PDO::FETCH_ASSOC);





// var_dump($conexao->getAttribute(PDO::ATTR_CONNECTION_STATUS));
// if ($conexao) {
//     echo "Conectado com sucesso!";
// };
