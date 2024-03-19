<?php

    if (isset($_POST['titulo_antigo']) && isset($_POST['novo_titulo']) && isset($_POST['novo_autor']) && isset($_POST['nova_img_capa'])) {
        // Conecta ao banco de dados
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        if (!$conn) {
            die('Could not connect: ' . mysqli_connect_error());
        }

        // Seleciona a base de dados
        mysqli_select_db($conn, 'Livraria');

        // Obtém os dados do formulário
        $titulo_antigo = $_POST['titulo_antigo'];
        $novo_titulo = $_POST['novo_titulo'];
        $novo_autor = $_POST['novo_autor'];
        $nova_img_capa = $_POST['nova_img_capa'];

        // Prepara a consulta SQL para atualizar os dados do livro
        $sql = "UPDATE livro SET titulo='$novo_titulo', autor='$novo_autor', img_capa='$nova_img_capa' WHERE titulo='$titulo_antigo'";
        
        // Mensagem de debug para verificar a consulta SQL gerada
        //echo "SQL: $sql<br>";

        // Executa a consulta SQL
        $retval = mysqli_query($conn, $sql);

        // Verifica se a consulta foi bem-sucedida
        if (!$retval) {
            // Mensagem de erro caso a consulta falhe
            die('Query failed: ' . mysqli_error($conn));
        }

        // Verifica se houve alguma linha afetada
        if (mysqli_affected_rows($conn) > 0) {
            echo '<p>Os dados do livro foram atualizados com sucesso!</p>';
        } else {
            echo '<p>Nenhuma alteração feita. Verifique se o livro selecionado existe ou se os dados são diferentes.</p>';
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($conn);
    } else {
        echo '<p>Parâmetros inválidos.</p>';
    }

?>