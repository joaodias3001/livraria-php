<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-FNAK</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet" type="text/css" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="wrapper-gradiant">
	<div id="wrapper-bgshadow">
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<h1><a href="#">ESPonteSor-FNAK</a></h1>
				</div>
			</div>
			<div id="menu-wrapper">
				<div id="menu">
					<ul><!-- Opções no site no menu -->
						<li><a href="livro.php" accesskey="1" title="">Página Inicial</a></li>
						<li><a href="livro.php" accesskey="2" title="">Livro</a></li>
						<li><a href="insere_livro.html" accesskey="6">Inserir livro</a></li>
						<li><a href="cd.php" accesskey="3" title="">CD</a></li>
						<li><a href="video.php" accesskey="4" title="">Video</a></li>
						<li><a href="revista.php" accesskey="5" title="">Revista</a></li>
					</ul>
				</div>
			</div>
			<div id="banner">
				<div class="image"><a href="#"><img src="books.jpg" width="1000" height="262" alt="" /></a></div>
			</div><center>
		<?php
		// Ligar há base de dados
				$dbhost = 'localhost';
				$dbuser = 'root';
				$dbpass = '';
				$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Não foi possivel estabelecer conexão");
				
				// Cria a tabela
				echo "<table border='1' style='text-align:center;'><tr><th>Capa do Livro</th><th>Titulo</th><<th>Autor</th></tr>";
				// Liga a tabela na base de dados
				$sql = 'SELECT* FROM livro';
				//Seleciona a base de dados
				mysqli_select_db($conn,'Livraria');
				$retval = mysqli_query( $conn, $sql );
				if(! $retval ){
					die('Could not get data: ' . mysqli_error($conn));// se não funcionar dá erro
				}

				while($row = mysqli_fetch_array($retval)){// vai buscar ha base de dados os dados nela guardada e poem os na tabela
					//echo "<tr><td>".$row['img_capa']."</td>";	
					echo "<tr><td>" . "<img class='filme' id='capa' src =". $row['img_capa'] ."></td>";
					echo "<td>".$row['titulo']."</td>";
					echo "<td>".$row['autor']."</td>";
					echo "<td><a href='deletar_livro.php?titulo=" . $row['titulo'] . "'>Deletar livro</a></td>";
					echo "</tr>";
				}
				echo "</table><br/>  <a href='livro.php'>Voltar ao ínicio</a>";// fecha a tabela e uma hiperligação para voltar ao inicio do site
				mysqli_close($conn);
			?></center>

			ola mundo 2 kfsdçfuiSBGBSGs
			
		</div>
	</div>
	
</div>
</body>
</html>