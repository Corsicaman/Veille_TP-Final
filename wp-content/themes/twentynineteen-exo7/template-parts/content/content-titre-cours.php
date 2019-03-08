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
		$var = substr ( get_the_title() , 4 , 1  );
		echo '<div class="unCours session'.$var.'">';          
		echo '<a href="';
		echo (get_permalink());
		echo '"><h2 class="cours-title">';
		echo(substr ( get_the_title() , 8 ));
		echo '</h2>';

		echo '<h2 class="entry-title">';
		echo(substr ( get_the_title() , 0 , 7 ));
		echo '</h2></a></div>';


		//the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
