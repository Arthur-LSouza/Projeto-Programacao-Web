<?php
session_start();

// inicia pontuação
if (!isset($_SESSION['pontos'])) {
    $_SESSION['pontos'] = 0;
}

// adiciona ponto
if (isset($_POST['correto']) && $_POST['correto'] == "1") {
    $_SESSION['pontos']++;
}

$proxima = $_POST['proxima'];
header("Location: $proxima");
exit();
?>
