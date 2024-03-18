<?php

$titulo = $_GET["titulo"];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Seleciona a base de dados
mysqli_select_db($conn, 'Livraria');

$sql = "DELETE FROM livro WHERE titulo = '$titulo'";
$retval = mysqli_query($conn, $sql);

if (mysqli_affected_rows ($conn) == 1) {
    echo '<font color="green">DELETE com sucesso!!!</font>';
} else {
    echo '<font color="red">DELETE falhou!!!</font>';
}

echo "<br><a href='livro.php'>Voltar ao ínicio</a>";




?>