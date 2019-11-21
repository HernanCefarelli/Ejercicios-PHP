<?php
$productos = [
	0 => [
			"id" => 1,
			"titulo" => "Articulo 1",
			"descripcion" => "Milanesa ",
			"precio" => 250,
			"imagen" => "img-pdto-1.jpg",
			"enOferta" => true
	],
	1 => [
		"id" => 1,
		"titulo" => "Articulo 2",
		"descripcion" => "Pizza ",
		"precio" => 300,
		"imagen" => "img-pdto-2.jpg",
		"enOferta" => false
	],
	2 => [
		"id" => 1,
		"titulo" => "Articulo 3",
		"descripcion" => "Empanada ",
		"precio" => 30,
		"imagen" => "img-pdto-3.jpg",
		"enOferta" => false
	],
	3 => [
		"id" => 1,
		"titulo" => "Articulo 4",
		"descripcion" => "Pasta ",
		"precio" => 300,
		"imagen" => "img-pdto-1.jpg",
		"enOferta" => false
	],
	4 => [
		"id" => 1,
		"titulo" => "Articulo 5",
		"descripcion" => "Papas frita ",
		"precio" => 100,
		"imagen" => "img-pdto-2.jpg",
		"enOferta" => true
	],
	5 => [
		"id" => 1,
		"titulo" => "Articulo 6",
		"descripcion" => "Hamburguesa ",
		"precio" => 300,
		"imagen" => "img-pdto-3.jpg",
		"enOferta" => false
	],
];

?>
<!DOCTYPE html>
<html>
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Responsive Web Design</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul >
					<li><a href="#">home</a></li>
					<li><a href="#">quienes</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">sucursales</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
			<?php foreach($productos as $producto) : ?>	

			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/<?=$producto["imagen"] ?> " alt="pdto 01">
					
					<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>
					<?= $producto["titulo"] ?>
				</h2>
				<p>
				<?=$producto["descripcion"] ?>
				</p>
				<a class="more" href="#">ver más</a>
			</article>
			<?php endforeach ; ?>
			
		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
