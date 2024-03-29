<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
	<title>Home</title>
</head>
<body>
	<!-- Meu comentário -->
	<div>
		<ul>
			<li><a href="#login" accesskey="1">[1] Login</a></li>
			<li><a href="#menu" accesskey="2">[2] Menu</a></li>	
			<li><a href="#principal" accesskey="3">[3] Principal</a></li>
			<li><a href="#rodape" accesskey="4">[4] Rodape</a></li>
		</ul>
	</div>
	<header>
		<h1>Meu App</h1>
		<div id="login">
			<form action="#" method="post">
				<label>
					Usuario:<input type="text" name="usuario" id="usuario">
				</label>
				<label>
					Senha:<input type="password" name="senha" id="senha">
				</label>
			</form>
		</div>
		<nav id="menu"> 
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="contato.html">Contato</a></li>
			</ul>
		</nav>
	</header>
	<main id="principal">
		
		<p>Conteúdo da página</p>
	</main>
	<footer id="rodape">
		<p>Copyright © 2022</p>
	</footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
