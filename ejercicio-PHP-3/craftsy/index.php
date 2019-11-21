<!DOCTYPE html>
<html>
<head>
	<?php include("head.html"); ?>
    <title>Craftsy | Inicio </title>
</head>
	<?php 
	
	$articulos = [
		[
			"Producto 1", "Descripcion Producto 1", 500,
			"estaEnOferta"=> true
		], 
		[
			"Producto 2", "Descripcion Producto 2", 600,
			"estaEnOferta"=> false
		],
		[
			"Producto 3", "Descripcion Producto 3", 100,
			"estaEnOferta"=> false
		],
		[
			"Producto 4", "Descripcion Producto 4", 250,
			"estaEnOferta"=> true
		],
		[
			"Producto 5", "Descripcion Producto 5", 900,
			"estaEnOferta"=> true
		],
		[
			"Producto 6", "Descripcion Producto 6", 500,
			"estaEnOferta"=> false
		]
	];
	function descripcionLargo($articulo)
	{	
		if($articulo["estaEnOferta"])
		{
			return $articulo[1]. "<br> Antes: U"."$"."D ".$articulo[2]. " Ahora: U"."$"."D ".descuento($articulo[2]);
		} else 
		{
			return $articulo[1]. "<br> Precio: U"."$"."D ".$articulo[2];
		}
		
	}
	function descuento($precio)
	{
		return $precio*0.80;
	}
	?>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<?php 
			include("header.html");
			?>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
				<?php 	foreach($articulos as $articulo) : ?>
					<article class="producto"><!-- Contenedor de cada producto -->
						<img class="main-photo" src="img/img-phone-01.jpg" alt="">
						<h2 class="name"><?= $articulo[0] ?></h2>
						<p><?= descripcionLargo($articulo)?></p>
						<a class="more" href="#">ver más</a>
					</article>
				<?php endforeach ; ?>					
				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
