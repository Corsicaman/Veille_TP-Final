<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


		<?php
		echo '<a href="';
		echo (get_permalink());		
		echo '"><div class="unCours">';

		echo '<div class="unCoursBg" style="background-image:url(\'';          


		$image = get_field('image_de_fond');

		echo ($image['url']);
 		echo "')\"></div>";

		echo '<div class="unCoursContent"><h2 class="cours-title">';
		echo(get_the_title());
		echo '</h2>';

		echo '<h2 class="excerpt">';
		echo(get_the_excerpt());
		echo '</h2></div>';

		echo '</div></a>';
		?>
