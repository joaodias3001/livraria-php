<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Verifica se os parâmetros foram recebidos via GET
if (isset($_GET['titulo']) && isset($_GET['autor']) && isset($_GET['img_capa'])) {
    $titulo = $_GET['titulo'];
    $autor = $_GET['autor'];
    $img_capa = $_GET['img_capa'];
?>
<form action="atualizar_livro.php" method="get">
    <input type="hidden" name="titulo_antigo" value="<?php echo htmlspecialchars($titulo); ?>">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="novo_titulo" value="<?php echo ($titulo); ?>"><br><br>
    <label for="autor">Autor:</label>
    <input type="text" id="autor" name="novo_autor" value="<?php echo ($autor); ?>"><br><br>
    <label for="img_capa">URL da Capa:</label>
    <input type="text" id="img_capa" name="nova_img_capa" value="<?php echo $img_capa; ?>"><br><br>
    <input type="submit" value="Atualizar">
</form>
<?php
} else {
    echo "<p>Parâmetros inválidos.</p>";
}
?>
</body>
</html>


