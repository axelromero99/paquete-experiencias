<?php

/**
 * Template Name: Paquetes de Experiencias
 */

get_header();

if ( have_posts() ) :

	while ( have_posts() ) :
		the_post();
		$experiences = get_field('experiences_items');

		$pageContact = get_pages(array('meta_key' => '_wp_page_template', 'meta_value' => 'template-contact.php'));
		$contactLink = get_permalink($pageContact[0]->ID);

		?>

<main>
	<div class="container-fluid p-0">
		<div class="banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/experiences-header-lg.png)"></div>
		<div class="container">
			<div class="inner-container">
				<div class="about">
					<h3 class="appear-animation" data-animation="fadeInUp" data-animation-duration="1500"><?php _e('Paquetes de experiencias', 'rewilding'); ?></h3>
					<h2 class="appear-animation" data-animation="fadeInUp" data-animation-duration="1500">Elegí como vas a vivir la Experiencia Rewilding</h2>
				</div>
			</div>

				<div class="card-column">

					<div class="card">

						<div class="card-image appear-animation" data-animation="fadeIn" data-animation-duration="1200">
							<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/lp3.jpg" alt="Card image cap">
							<h6 class="card-image-title appear-animation" data-animation="fadeInUp" data-animation-duration="600" data-animation-delay="300">Pasá tu verano en las Aguas Brillantes del Iberá</h6>
						</div>
						
						<div class="card-body appear-animation" data-animation="fadeInUp" data-animation-duration="1500">
							<p class="card-text lp" >
								Te invitamos a vivir una experiencia combinada en los Esteros.<br>
								Dos noches en Posada Uguay donde podrás navegar de forma exclusiva la inmensidad que comprende la Laguna Fernández y descubrir junto a nosotros, toda la fauna escondida dentro de las islas flotantes que la componen.<br>
								Pero esto no es todo, te agregamos dos noches en Rincón del Socorro para disfrutar en tus tiempos libres de nuestra refrescante piscina rodeada de animales salvajes que deambulan por la zona.<br>
								Cabalgatas, safaris nocturnos, salidas en kayak son algunas de las actividades que tenemos para ofrecerte.<br>
								Para mayor información, ¡no dudes en consultarnos!<br><br>								
							</p>
							<a href="https://api.whatsapp.com/send?phone=543794074512" class="btn btn-dark" target="blank">¡Reservar!</a>
						</div>
					</div>

					<div class="card">

						<div class="card-image appear-animation" data-animation="fadeIn" data-animation-duration="1200">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/lp2.jpg" alt="Card image cap">
								<h6 class="card-image-title appear-animation" data-animation="fadeInUp" data-animation-duration="600" data-animation-delay="300">Estancia Iberá Full</h6>
						</div>

						<div class="card-body appear-animation" data-animation="fadeInUp" data-animation-duration="1500">
							<p class="card-text lp" >
							Para que puedas dedicarte exclusivamente a disfrutar de los Esteros del Iberá, planificamos tu estadía full board de primera mano de los prestadores locales, nuestros vecinos en Colonia Carlos Pellegrini.<br>
							El programa incluye tres noches de alojamiento en Estancia Iberá categoría premium, almuerzos y cenas en Colonia Carlos Pellegrini; y dos actividades guiadas por día.<br><br>
							</p>
							<a href="https://api.whatsapp.com/send?phone=543794074512" class="btn btn-dark" target="blank">¡Reservar!</a>
						</div>
					</div>

					<div class="card">

						<div class="card-image appear-animation" data-animation="fadeIn" data-animation-duration="1200">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/lp1.jpg" alt="Card image cap">
									<h6 class="card-image-title appear-animation" data-animation="fadeInUp" data-animation-duration="600" data-animation-delay="300">Esteros desde el aire</h6>
						</div>

						<div class="card-body appear-animation" data-animation="fadeInUp" data-animation-duration="1500">
							<p class="card-text description-lp" >
							Conocé la magnitud de los Esteros desde una perspectiva aérea para luego adentrarte en ellos.
							<br>
							Incluye los traslados de ingreso y salida por medio de taxi aéreo desde Posadas, 3 noches de alojamiento con pensión completa, bebidas sin alcohol y actividades en Rincón del Socorro. Para evitar las esperas en los aeropuertos, te bonificamos el late check out y una cortesía de bienvenida en la habitación.
							<br><br>
							</p>
							<a href="https://api.whatsapp.com/send?phone=543794074512" class="btn btn-dark" target="blank">¡Reservar!</a>
						</div>
					</div>

					<div class="card">
						<div class="card-image appear-animation" data-animation="fadeIn" data-animation-duration="1200">
										<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/lp4.jpg" alt="Card image cap">
										<h6 class="card-image-title appear-animation" data-animation="fadeInUp" data-animation-duration="600" data-animation-delay="300">Un viaje hacia nuestros orígenes</h6>
						</div>
						<div class="card-body appear-animation" data-animation="fadeInUp" data-animation-duration="1500">
							<h4>Full board, 3 noches</h4>
							<p class="card-text lp" >
							Viajamos<br>
							9.000 años atrás en esta excursión exclusiva recorriendo el emblemático cañadón del río Pinturas y sus sitios arqueológicos: Alero Charcamata y el Cañadón del Río Pinturas. 
							<br>
							Incluye<br>
							excursión con guía local hacia el Alero Charcamata con traslados ida y vuelta desde el alojamiento, guía local hacia el Cañadón del Río Pinturas con traslados ida y vuelta y el Sitio Arqueológico Cueva de las Manos, viandas para las excursiones, 3 noches de alojamiento con pensión completa en La Posta de los Toldos.<br><br>

							<i>Aclaración: durante las excursiones se realizan caminatas de baja y media exigencia. Consultanos por traslados desde Comodoro Rivadavia.</i>
							</p>
							<a href="https://api.whatsapp.com/send?phone=543794074512" class="btn btn-dark" target="blank">¡Reservar!</a>
						</div>
					</div>

					<div class="card">
						<div class="card-image appear-animation" data-animation="fadeIn" data-animation-duration="1200">
							<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/lp5.jpg"alt="Card image cap">
							<h6 class="card-image-title appear-animation" data-animation="fadeInUp" data-animation-duration="600" data-animation-delay="300">Un Portal hacia la Patagonia</h6>
						</div>
						<div class="card-body appear-animation" data-animation="fadeInUp" data-animation-duration="1500">
							<h4>Full board, 3 noches, 4 días </h4>
							<p class="card-text lp" >
							Te invitamos a conocer las maravillas de la región del Parque Patagonia en este viaje que une a través de la emblemática ruta 40 y la ruta escénica 43, la belleza del lago más grande de Argentina con la riqueza arqueológica y paisajística del Cañadón del Río Pinturas.<br>
							Partiendo siempre desde La Posta de los Toldos visitaremos los dos Portales del Parque: La Ascensión y Cañadón Pinturas.<br>
							Incluye 3 actividades en el Portal Cañadón Pinturas, guiada al Sitio<br>
							Cueva de las Manos, excursión a Los Antiguos y Portal La Ascensión, 3 noches de alojamiento con pensión completa en La Posta de los Toldos. <br><br>

							<i>Aclaración: durante las excursiones se realizan caminatas
							de baja y media exigencia. Consultanos por traslados desde Comodoro Rivadavia.</i>
							</p>

							<a href="https://api.whatsapp.com/send?phone=543794074512" class="btn btn-dark" target="blank">¡Reservar!</a>
						</div>
					</div>
				</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>

<?php endwhile; endif; 