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
} else {
	// no posts found
}
			// /* Start the Loop */
			// while ( have_posts() ) :
			// 	the_post();

			// 	get_template_part( 'template-parts/content/content', 'front-page' );

			// 	// If comments are open or we have at least one comment, load up the comment template.
			// 	if ( comments_open() || get_comments_number() ) {
			// 		comments_template();
			// 	}

			// endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
