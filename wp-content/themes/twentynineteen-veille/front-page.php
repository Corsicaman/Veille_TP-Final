<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">



<?php if (has_post_thumbnail( $post->ID ) ): ?>


<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 

 endif; ?>




		<?php

		echo '<h1 id="titreAccueil" class="animTitre">Bienvenue sur le site du TIM</h1>';
		echo '<p class="desc">Vous trouverez ici des informations concernant les dernières nouvelles en lien avec le Collège de Maisonneuve et le programme d\'intégration multimédia, ainsi que les prochains évènements à venir.</p>';
		echo '<a href="/cours/"><h2 style="margin-top: -30px; font-size: 16px;" class="cours-title animTitre">> Voir la grille des cours</h2></a>';

		// LISTE DES DERNIÈRES NOUVELLES
		$query = new WP_Query( array( 'category_name' => 'nouvelle' ) );
		if ( $query->have_posts()) {
			echo '<h2 class="sousTitreAccueil animTitre">Dernières nouvelles</h2>';
			echo '<div id="grid">';
			while ( $query->have_posts() ) {
				$query->the_post();
				get_template_part( 'template-parts/content/content', 'front-page' );
			}
			echo '</div>';
			/* Restore original Post Data */
			wp_reset_postdata();
			}

		// LISTE DES ÉVÈNEMENTS À VENIR
		$query = new WP_Query( array( 'category_name' => 'evenement' ) );
		if ( $query->have_posts()) {
			echo '<h2 class="sousTitreAccueil animTitre">Évènements à venir</h2>';
			echo '<div id="grid">';
			while ( $query->have_posts() ) {
				$query->the_post();
				get_template_part( 'template-parts/content/content', 'front-page' );
			}
			echo '</div>';
			/* Restore original Post Data */
			wp_reset_postdata();
			}			
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
