<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('location:login.php');
    exit;
}


echo "Bem-Vindo, " . $_SESSION['usuario'] . "! Esta é a página de
dashboard.";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <a href="logout.php">Sair</a>
</body>
</html>