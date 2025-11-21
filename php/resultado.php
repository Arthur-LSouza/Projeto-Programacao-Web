<?php
session_start();
include "conexao.php";

$pontos = $_SESSION['pontos'] ?? 0;

// Nome fixo só para exemplo
$usuario = "Jogador";

// salva no banco
$stmt = $conn->prepare("INSERT INTO pontuacao (usuario, pontos) VALUES (?, ?)");
$stmt->bind_param("si", $usuario, $pontos);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/pontuacao.css">
    <title>Resultado Final</title>
</head>
<body>
    <h1>Você fez <?php echo $pontos; ?> ponto(s)!</h1>
    <div class="container">
        <a href="../index.html ">Jogar Novamente</a>
    </div>
</body>
</html>

<?php
session_destroy();
?>
