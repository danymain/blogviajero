<?php get_header();?>

<!--=====================================
BANNER
======================================-->

<?php include("modules/banner-index.php"); ?>


<!--=====================================
BUSCADOR PARA MÓVIL
======================================-->
<?php include("modules/buscador-movil.php"); ?>

<!--=====================================
MENU
======================================-->

<?php include("modules/menu.php"); ?>

<!--=====================================
GRID DE CATEGORÍAS
======================================-->

<div class="container-fluid py-2 py-md-5 bg-white grid">

	<div class="container p-0">

		<div class="d-flex">

			<div class="d-flex flex-column columna1">
			
				<figure class="p-2 photo1" vinculo="categorias.html">
					
					<p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Suramérica</p>

				</figure>

				<figure class="p-2 photo2" vinculo="categorias.html">
					
					<p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Africa</p>

				</figure>

				<figure class="d-block d-md-none p-2 photo6" vinculo="categorias.html">
					
					<p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Asia</p>

				</figure>

			</div>

			<div class="d-flex flex-column flex-fill columna2">

				<div class="d-block d-md-flex">

					<figure class="p-2 flex-fill photo3" vinculo="categorias.html">

						<p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Centromérica</p>
						
					</figure>

					<figure class="p-2 flex-fill photo4" vinculo="categorias.html">
						
						<p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Europa</p>

					</figure>

				</div>

				<figure class="p-2 photo5" vinculo="categorias.html">

					<p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Norteamérica</p>
					
				</figure>

			</div>

		</div>

	</div>

</div>

<!--=====================================
CONTENIDO BLOG
======================================-->

<div class="container-fluid bg-white contenidoInicio pb-4">
	
	<div class="container">
		
		<div class="row">
			
			<!-- COLUMNA IZQUIERDA -->

			<div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">

				<!-- https://developer.wordpress.org/themes/basics/the-loop/ -->

				<?php 


				$arrayPosts = [];

				if ( have_posts() ) : ?>
				   
				    <?php while ( have_posts() ) : the_post(); 

				    	array_push($arrayPosts, get_the_ID());

				    	?>

				        <div class="row">
					
							<div class="col-12 col-lg-5">

								<a href="<?php the_permalink(); ?>"><h5 class="d-block d-lg-none py-3"><?php the_title(); ?></h5></a>
					
								<a href="<?php the_permalink(); ?>">

									<?php the_post_thumbnail('post-thumbnails', array("class"=>"img-fluid")); ?>				

								</a>

							</div>

							<div class="col-12 col-lg-7 introArticulo">
								
								<a href="<?php the_permalink(); ?>"><h4 class="d-none d-lg-block"><?php the_title(); ?></h4></a>
								
								<p class="my-2 my-lg-5"><?php the_excerpt(); ?></p>

								<a href="<?php the_permalink(); ?>" class="float-right">Leer Más</a>

								<div class="fecha"><?php the_time('d.m.Y'); ?></div>

							</div>


						</div>

						<hr class="mb-4 mb-lg-5" style="border: 1px solid #79FF39">

				    <?php endwhile; ?>

				<?php endif; ?>				
				
				<div class="container d-none d-md-block">
					
					<ul class="pagination justify-content-center">
						
						<?php echo paginate_links(); ?>

					</ul>

				</div>

				<div class="container d-block d-md-none contenidoAdicional mb-5"> 

				<?php	 

					if($arrayPosts){
						
						$idSobrantes = implode(",", $arrayPosts);

					}

					echo do_shortcode('[ajax_load_more
										button_label="Cargar Más..."
										post__not_in="'.$idSobrantes.'"]');
				?>

				</div>

			</div>

			<!-- COLUMNA DERECHA -->

			<?php get_sidebar(); ?>

		</div>

	</div>

</div>

<!--=====================================
FOOTER
======================================-->

<?php get_footer(); ?>