<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
</head>
<body>
    <?php 
    $num = $_GET['numero'] ?? 1;
    $arq = file_get_contents("https://www.freetogame.com/api/game?id=$num");
    $json = json_decode($arq, true);
    $titulo = $json['title'];
    $imagem = $json['thumbnail'];
    $descricao = $json['description'];
    $genero = $json['genre'];
    $produtora = $json['developer'];
    $plataforma = $json['platform'];
    $data = $json['release_date'];
    echo "<img src='$imagem'> <h1>$titulo</h1> gênero: $genero <br> produtora: $produtora <br> plataforma: $plataforma <br> data de lançamento: $data <hr> <p>$descricao</p>";
    ?>
</body>
</html>