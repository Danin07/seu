<?php
// Obtém a URL da página atual
$current_url = $_SERVER['REQUEST_URI'];

// Verifica se a página não encontrada não é a página "index.php"
if ($current_url != '/index.php') {
    // Redireciona para a página "index.php"
    header("Location: /index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doct</title>
    <link rel="stylesheet" href="/in.css">
</head>

<body>




<img src="/imagens/Meat-PNG-Download-Image.png" alt="">
<img src="/imagens/Meat-PNG-Download-Image.png" alt="">




</body>
</html>
