<?php
// conexao.php - ajuste as credenciais conforme seu ambiente
$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '';
$db_name = 'sistema_cadastro';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_errno) {
    die('Falha na conexão: ' . $mysqli->connect_error);
}
$mysqli->set_charset('utf8mb4');
?>
