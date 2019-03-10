<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php

				echo '<div class="contenuCours">';

				echo '<h2 class="cours-title">Sigle du cours : </h2>';
				echo '<p class="texteCours">';
				echo(substr ( get_the_title() , 0 , 7 ));
				echo '</p>';

				echo '<h2 class="cours-title">Description du cours</h2>';
				echo '<p class="texteCours">';
				echo (the_content());		
				echo '</p>';


				echo '<h2 class="cours-title">Durée du cours</h2>';
				echo '<p class="texteCours">';
				// Enseignants par défaut
				if (get_field('duree') == '') {
					echo '40 heures';
				}
				else {
					echo (get_field('duree'));
				}				
				echo '</p>';


				echo '<h2 class="cours-title">Enseignants pour ce cours</h2>';
				echo '<p class="texteCours">';
				// Enseignants par défaut
				if (get_field('enseignants') == '') {
					echo 'Eddy Martin, Caroline Martin';
				}
				else {
				echo (get_field('enseignants'));

				}
				echo '</p>';

				
				echo '</div>';

		?>



	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
