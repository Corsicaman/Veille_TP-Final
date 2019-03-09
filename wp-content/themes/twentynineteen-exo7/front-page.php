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
			$query = new WP_Query( array( 'category_name' => 'evenement' ) );
// The Loop
		if ( $query->have_posts() ) {
			echo '<h1 id="titreAccueil" class="animTitre">Page d\'accueil personalisée</h1>';
			echo '<h2 id="sousTitreAccueil" class="animTitre">Liste des évènements</h2>';
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
