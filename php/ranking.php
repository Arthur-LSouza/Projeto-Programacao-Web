<?php
include "conexao.php";

$result = $conn->query("SELECT usuario, pontos, data_jogo FROM pontuacao ORDER BY pontos DESC LIMIT 20");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/ranking.css">
    <title>Ranking</title>
</head>
<body>
    <h1>Ranking do Quiz</h1>

    <table border="1">
        <tr>
            <th>Jogador</th>
            <th>Pontos</th>
            <th>Data</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['usuario']; ?></td>
            <td><?php echo $row['pontos']; ?></td>
            <td><?php echo $row['data_jogo']; ?></td>
        </tr>
        <?php endwhile; ?>

    </table>
</body>
</html>
